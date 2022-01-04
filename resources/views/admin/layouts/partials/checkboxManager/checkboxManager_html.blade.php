<style>
    /*   */
    #search-dropdown-loading {
        display: flex;
        position: absolute;
        left: 148px;
        top: 6px;
    }


    /* start spinner  */

    #spinner {
        width: 3px;
        padding-bottom: 14px;
        margin: 0px auto;
        -webkit-animation: spinner_anim .3s infinite steps(12);
        -webkit-transform-origin: 0.10em 0.9em;
    }

    #spinner .bar {
        position: absolute;
        width: .21em;
        height: .5em;
        background: #ff0000;
        -webkit-border-radius: .2em;
        -webkit-transform-origin: 0.1em 0.9em;
    }

    #spinner #stepOne {
        background: #ddd;
        -webkit-transform: rotate(0deg);
    }

    #spinner #stepTwo {
        background: #ccc;
        -webkit-transform: rotate(30deg);
    }

    #spinner #stepThree {
        background: #bbb;
        -webkit-transform: rotate(60deg);
    }

    #spinner #stepFour {
        background: #aaa;
        -webkit-transform: rotate(90deg);
    }

    #spinner #stepFive {
        background: #999;
        -webkit-transform: rotate(120deg);
    }

    #spinner #stepSix {
        background: #888;
        -webkit-transform: rotate(150deg);
    }

    #spinner #stepSeven {
        background: #777;
        -webkit-transform: rotate(180deg);
    }

    #spinner #stepEight {
        background: #666;
        -webkit-transform: rotate(210deg);
    }

    #spinner #stepNine {
        background: #555;
        -webkit-transform: rotate(240deg);
    }

    #spinner #stepTen {
        background: #444;
        -webkit-transform: rotate(270deg);
    }

    #spinner #stepEleven {
        background: #333;
        -webkit-transform: rotate(300deg);
    }

    #spinner #stepTvelve {
        background: #222;
        -webkit-transform: rotate(330deg);
    }

    @-webkit-keyframes spinner_anim {
        0% {
            -webkit-transform: rotate(0deg);
        }
        100% {
            -webkit-transform: rotate(360deg);
        }
    }

    /* end spinner  */

</style>
<div class="d-flex card mt-2" id="tags-check-box">
    <style>.form-check .form-check-sign .check:before {
            margin-right: 11px !important;
        }

        .bmd-form-group {
            width: 90% !important;
        }
    </style>
    <input type="text" style="display: none" class="d-none form-control" name="{{$checkboxName}}">
    <div class="d-flex flex-column w-100 " id="{{$checkboxName}}-list-checkboxes" style="overflow: auto; height: 133px;">

    </div>
    <div class="d-flex flex-column w-100" style="border-top: 1px solid #d2d2d2;">
        <div class="form-check d-flex px-3  justify-content-between"
             style="direction: rtl;padding-left: 14px !important;">
            <div class="d-flex align-items-center w-100">
                <input type="text" class="form-control" id="{{$checkboxName}}-checkbox-text-input">
            </div>
            <div class="d-flex">
                <div id="{{$checkboxName}}-checkbox-loading-loading" style="display: none;margin-top: 7px;">
                    <div id="spinner" style="position: relative;">
                        <div id="stepOne" class="bar"></div>
                        <div id="stepTwo" class="bar"></div>
                        <div id="stepThree" class="bar"></div>
                        <div id="stepFour" class="bar"></div>
                        <div id="stepFive" class="bar"></div>
                        <div id="stepSix" class="bar"></div>
                        <div id="stepSeven" class="bar"></div>
                        <div id="stepEight" class="bar"></div>
                        <div id="stepNine" class="bar"></div>
                        <div id="stepTen" class="bar"></div>
                        <div id="stepEleven" class="bar"></div>
                        <div id="stepTvelve" class="bar"></div>
                    </div>
                </div>
                <button type="button" class="btn btn-sm btn-info " id="{{$checkboxName}}-checkbox-add-btn" style="margin-right: 20px;"><i class="fa fa-plus text-light" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
    <div style="display: none" id="{{$checkboxName}}-checkbox-component">
        <div class="form-check d-flex px-3  justify-content-between {{$checkboxName}}-checkbox-item"
             style="direction: rtl;padding-left: 14px !important;" >
            <div class="d-flex  align-items-center">
                <label class="form-check-label p-0" style="margin-right: -9px;">
                    <input class="form-check-input {{$checkboxName}}-checkbox-check-input" type="checkbox"
                           value="">
                    <span style="position: relative ;margin-top: 10px;" class="form-check-sign">
                        <span class="check"></span>
                    </span>
                </label>
                <span class="text-black {{$checkboxName}}-checkbox-title  ml-2" ></span>
            </div>
            <div>
                <button type="button" class="btn btn-sm btn-danger {{$checkboxName}}-checkbox-delete-btn"  ><i class="fa fa-minus text-light" aria-hidden="true"></i></button>
            </div>
        </div>
    </div>
</div>