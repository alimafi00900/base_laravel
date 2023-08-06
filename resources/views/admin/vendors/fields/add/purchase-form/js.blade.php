<style>
    #purchaseForm>div {
        background: #2D3243 !important;
        border: 2px solid white;
        border-radius: 20px;
        padding: 20px 21px;
    }

    #purchaseForm .items .item.warning {
        background: #8f3d3d !important;
    }

    #purchaseForm .items .item.field {
        background: #3d4f8f !important;
    }

    #purchaseForm .items .item {

        border: 2px solid white;
        border-radius: 20px;
        padding: 20px 21px;

    }

    .tox.tox-tinymce {
        height: 251px !important;
        width: 100% !important;
    }
</style>


<script type="text/jsx">

    

    const root = ReactDOM.createRoot(document.getElementById('purchaseForm'));

    function PurchaseForm() {
        const getForm = function () {
            let form = $("[name='purchase_form']").val()
            if (isValidValue(form) != true) {
                form = "{}"
            }
            return JSON.parse(form)
        }

        let [forms, setForms] = React.useState(getForm());
        let [editors, setEditors] = React.useState({});
        ///////////////
        const addForm = function () {
            let formName = prompt("نام فرم را وارد کنید")
            formName = filterCharEn(formName)
            if (isValidValue(formName) != true) {
                toastr.error("نام فرم وارد نشده است");
                return
            }
            if (getProperty(forms, formName) !== null) {
                toastr.error("فرمی با این نام وجود دارد");
                return
            }
            forms[formName] = {
                display_name: "",
                index: "",
                items: {}
            }
            reloadForm()
        }
        ///////////////
        const addFieldItem = function (key) {
            let name = prompt("نام فیلد را وارد کنید")
            name = filterCharEn(name)
            if (isValidValue(name) != true) {
                toastr.error("نام فیلد وارد نشده است");
                return
            }
            if (getProperty(forms[key]["items"], name) !== null) {
                toastr.error("فیلدی با این نام وجود دارد");
                return
            }
            forms[key]["items"][name] = {
                "display_name": "",
                "index": "",
                "type": "field",
                "number": "1",
                "input_type": "text",
                "required": false,
                "min_length": "",
                "max_length": "",
                "description": ""
            }
            reloadForm()
            initEditor(key + "_field_description")
        }

        const addWarningItem = function (key) {
            let name = prompt("نام هشدار را وارد کنید")
            name = filterCharEn(name)
            if (isValidValue(name) != true) {
                toastr.error("نام هشدار وارد نشده است");
                return
            }
            if (getProperty(forms[key]["items"], name) !== null) {
                toastr.error("هشداری با این نام وجود دارد");
                return
            }
            forms[key]["items"][name] = {"type": "warning", "index": "", "description": ""}
            reloadForm()
            initEditor(key + "_warning_description")
        }
        /////////////////
        const removeFieldItem = function (key, item_key) {
            if (confirm("ایا مایل به حذف فیلد " + item_key + " هستید؟ ")) {
                delete forms[key]["items"][item_key];
                reloadForm()
            }
        }
        const removeWarningItem = function (key, item_key) {
            if (confirm("ایا مایل به حذف هشدار " + item_key + " هستید؟ ")) {
                delete forms[key]["items"][item_key];
                reloadForm()
            }
        }
        /////////////////
        const reloadForm = function () {
            setForms(reloadObject(forms))
        }

        const initEditor = function (elem_id) {
            tinymce.init({
                selector: '#' + elem_id,
                language: 'fa',
                plugins: 'print preview paste importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern noneditable help charmap quickbars emoticons a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
                toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
                toolbar_mode: 'floating',
                relative_urls: false,
                remove_script_host: false,
                convert_urls: true,
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                init_instance_callback: function (editor) {
                    editor.on('keyup', function (e) {
                        changeEditor(elem_id, tinymce.get(elem_id).getContent())
                    });
                },
            });

        }


        const changeEditor = function (elem_id, content) {
            reloadForm()
            const formKey = $("#" + elem_id).attr("formKey")
            const itemKey = $("#" + elem_id).attr("itemKey")
            let tempForm = getForm()
            tempForm[formKey]["items"][itemKey]["description"] = String(content)
            setForms(reloadObject(tempForm))

        }

        const initEditors = function (Editors = null) {
            if (Editors == null) {
                Editors = editors
            }
            Object.keys(Editors).map(function (key) {
                initEditor(key)
            })
        }

        const getEditors = function (forms) {
            let out = {}
            Object.keys(forms).map(function (formKey) {
                let items = forms[formKey]["items"]
                Object.keys(items).map(function (itemKey) {
                    if (getProperty(items[itemKey], "description") != null) {
                        out[itemKey + "_" + getProperty(items[itemKey], "type") + "_" + "description"] = true
                    }
                })
            })
            return out;
        }

        React.useEffect(function () {
            reloadForm()
        }, [])

        React.useEffect(function () {
            setEditors(reloadObject(getEditors(getForm())))
            $("[name='purchase_form']").val(JSON.stringify(forms))
            initEditors(reloadObject(getEditors(getForm())))
        }, [forms])

        return (

            <div className=" col-12 my-4">
                <div className="body">
                    {
                        Object.keys(forms).map(function (key) {
                            return (
                                <div className="row mb-4">
                                    <div className="col-12 d-flex justify-content-between">
                                        <div><h4>فرم {key}</h4></div>
                                        <div>
                                            <a onClick={() => {
                                                if (confirm("ایا مایل به حذف فرم " + key + " هستید؟ ")) {
                                                    delete forms[key];
                                                    reloadForm()
                                                    $(".white_space_nowrap").show();

                                                }
                                            }} className="btn btn-sm btn-danger">حذف فرم
                                            </a>
                                        </div>
                                    </div>

                                    <div className="my-3 items">
                                        {
                                            (isValidValue(forms[key]["items"])) &&
                                            (
                                                Object.keys(forms[key]["items"]).map(function (item_key) {
                                                    if (getProperty(forms[key]["items"][item_key], 'type') == "field") {
                                                        return (
                                                            <div className="row mb-3 item field">
                                                                <div className="col-12 d-flex justify-content-between">
                                                                    <div><h4>فیلد {item_key}</h4></div>
                                                                    <div>
                                                                        <a onClick={() => {
                                                                            removeFieldItem(key, item_key)
                                                                        }} className="btn btn-sm btn-danger">حذف فیلد
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group col-12 col-sm-6  col-md-4">
                                                                    <label htmlFor={item_key + "_field_display_name"}>نام
                                                                        نمایشی</label>
                                                                    <input
                                                                        value={forms[key]["items"][item_key]["display_name"]}
                                                                        type="text" class="form-control"
                                                                        id={item_key + "_display_name"}
                                                                        onChange={(e) => {
                                                                            forms[key]["items"][item_key]["display_name"] = e.target.value
                                                                            reloadForm()
                                                                        }}
                                                                    />
                                                                </div>

                                                                

                                                                <div class="form-group col-12 col-sm-6  col-md-4">
                                                                    <label htmlFor={item_key + "_field_input_type"}>نوع
                                                                        فیلد</label>
                                                                    <select
                                                                        value={forms[key]["items"][item_key]["input_type"]}
                                                                        type="text" class="form-control"
                                                                        onChange={(e) => {
                                                                            forms[key]["items"][item_key]["input_type"] = e.target.value
                                                                            reloadForm()
                                                                        }} id={item_key + "_input_type"}>
                                                                        <option value="str">متن</option>
                                                                        <option value="email">ایمیل</option>
                                                                        <option value="int">فقط عدد</option>
                                                                    </select>
                                                                </div>

                                                                
                                                                
                                                            </div>
                                                        )
                                                    } else if (getProperty(forms[key]["items"][item_key], 'type') == "warning") {
                                                        return (
                                                            <div className="row mb-3 item warning">
                                                                <div className="col-12 d-flex justify-content-between">
                                                                    <div><h4>هشدار {item_key}</h4></div>
                                                                    <div>
                                                                        <a onClick={() => {
                                                                            removeWarningItem(key, item_key)
                                                                        }} className="btn btn-sm btn-danger">حذف هشدار
                                                                        </a>
                                                                    </div>
                                                                </div>


                                                                <div class="form-group col-12 col-sm-6  col-md-4">
                                                                    <label htmlFor={item_key + "_warning_index"}>ترتیب
                                                                        شمارنده</label>
                                                                    <input
                                                                        value={forms[key]["items"][item_key]["index"]}
                                                                        type="text" class="form-control"
                                                                        id={item_key + "_warning_index"}
                                                                        onChange={(e) => {
                                                                            let value = e.target.value
                                                                            if (isValidValue(value) == true) {
                                                                                if (isNumeric(value) != true) {
                                                                                    return
                                                                                }
                                                                            }
                                                                            forms[key]["items"][item_key]["index"] = e.target.value
                                                                            reloadForm()
                                                                        }}
                                                                    />
                                                                </div>

                                                            </div>
                                                        )
                                                    }
                                                })
                                            )
                                        }
                                    </div>
                                    <div className="d-flex col-12 justify-content-end">
                                        <a onClick={() => {
                                            addFieldItem(key)
                                        }} className="btn btn-sm mx-2 btn-success">افزودن فیلد
                                        </a>
                                        <a
                                            onClick={() => {
                                                addWarningItem(key)
                                            }}
                                            className="btn btn-sm mx-2 btn-primary">افزودن هشدار
                                        </a>
                                    </div>
                                </div>
                            );
                        })
                    }
                </div>
                <div className="footer d-flex justify-content-start">
                    <div className="d-flex">
                        <a onClick={() => {
                            addForm()
                        
                             $(".white_space_nowrap").hide();


                        }} className="btn btn-success btn-sm white_space_nowrap">افزودن فرم</a>
                    </div>
                </div>
            </div>
        );
    }


    root.render(<PurchaseForm/>);
</script>
