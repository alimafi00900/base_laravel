<style>
    .hidden {
        display: none;
    }

    .sticky-button {
        position: fixed;
        background-color: #d23f31;
        bottom: 20px;
        left: 20px;
        border-radius: 50px;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.1);
        z-index: 20;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 55px;
        height: 55px;
        -webkit-transition: all 0.2s ease-out;
        transition: all 0.2s ease-out;
    }

    .sticky-button svg {
        margin: auto;
        fill: #fff;
        width: 35px;
        height: 35px;
    }

    .sticky-button a,.sticky-button label {
        cursor: pointer;
        display: flex;
        align-items: center;
        width: 55px;
        height: 55px;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out;
    }

    .sticky-button label svg.close-icon {
        display: none;
    }

    .sticky-chat {
        position: fixed;
        bottom: 70px;
        left: 20px;
        width: 320px;
        -webkit-transition: all .3s ease-out;
        transition: all .3s ease-out;
        z-index: 21;
        opacity: 0;
        visibility: hidden;
    }

    .sticky-chat a {
        text-decoration: none;
        font-family: 'Roboto',sans-serif;
        color: #505050;

    }

    .sticky-chat svg {
        width: 35px;
        height: 35px;
    }

    .sticky-chat .chat-content {
        border-radius: 10px;
        background-color: #fff;
        direction: ltr;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.25);
        overflow: hidden;
        font-family: 'Roboto',sans-serif;
        font-weight: 400;
    }

    .sticky-chat .chat-header {
        position: relative;
        display: flex;
        align-items: center;
        padding: 15px 20px;
        background-color: #d23f31;
        overflow: hidden;
    }

    .sticky-chat .chat-header:after {
        content: '';
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
        width: 80px;
        height: 75px;
        background: rgba(0,0,0,.040);
        border-radius: 70px 0 5px 0;
    }

    .sticky-chat .chat-header svg {
        width: 35px;
        height: 35px;
        flex: 0 0 auto;
        fill: #fff;
    }

    .sticky-chat .chat-header .title {
        padding-left: 15px;
        font-size: 14px;
        font-weight: 600;
        font-family: 'Roboto',sans-serif;
        color: #fff;
    }

    .sticky-chat .chat-header .title span {
        font-size: 11px;
        font-weight: 400;
        display: block;
        line-height: 1.58em;
        margin: 0;
        color: #f4f4f4;
    }

    .sticky-chat .chat-text {
        display: flex;
        flex-wrap: wrap;
        margin: 30px 20px;
        font-size: 12px;
    }

    .sticky-chat .chat-text span {
        display: inline-block;
        margin-right: auto;
        color: black !important;
        padding: 10px;
        background-color: #f0f5fb;
        border-radius: 0px 15px 15px;
    }

    .sticky-chat .chat-text span:after {
        content: 'just now';
        display: inline-block;
        margin-left: 10px;
        font-size: 9px;
        color: #989b9f;
    }

    .sticky-chat .chat-text span.typing {
        margin: 15px 0 0 auto;
        padding: 10px;
        border-radius: 15px 0px 15px 15px;
    }

    .sticky-chat .chat-text span.typing:after {
        display: none;
    }

    .sticky-chat .chat-text span.typing svg {
        height: 13px;
        fill: #505050;
    }

    .sticky-chat .chat-button .msg-box-input{
        width: 88%;
    }
    .sticky-chat .chat-button .msg-box-input input{
        width: 100%;
        color: black!important;
        direction: rtl;
    }
    .sticky-chat .chat-button {
        display: flex;
        align-items: center;
        margin-top: 15px;
        padding: 12px 20px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 5px 0 rgba(0,0,0,.25);
        overflow: hidden;
        font-size: 12px;
        font-family: 'Roboto',sans-serif;
        font-weight: 400;
        direction: ltr;
        display: flex;
        justify-content: space-between;
    }

    .sticky-chat .chat-button svg {
        width: 20px;
        height: 20px;
        fill: #505050;
        margin-left: auto;
        transform: rotate(40deg);
        -webkit-transform: rotate(40deg);
    }

    .chat-menu:checked+.sticky-button label {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
    }

    .chat-menu:checked+.sticky-button label svg.chat-icon {
        display: none;
    }

    .chat-menu:checked+.sticky-button label svg.close-icon {
        display: table-cell;
    }

    .chat-menu:checked+.sticky-button+.sticky-chat {
        bottom: 90px;
        opacity: 1;
        visibility: visible;
    }
</style>
<input class="chat-menu hidden" id="offchat-menu" type="checkbox"/>
<div class="sticky-button" id="sticky-button">
    <label for="offchat-menu">
        <svg xmlns="http://www.w3.org/2000/svg" id="Outline" class="chat-icon" viewBox="0 0 24 24" style="width: 28px;height: 28px"><path d="M22,7a2,2,0,0,0,2-2V1a1,1,0,0,0-2,0V5H18c-.018,0-.032.009-.05.01a6.411,6.411,0,0,0-11.89,0C6.039,5.011,6.021,5,6,5H2V1A1,1,0,0,0,0,1V5A2,2,0,0,0,2,7H5.485L4.472,11H1a1,1,0,0,0,0,2H3.965l-.145.573L3.8,13.7a8.37,8.37,0,0,0-.07,1.032A8.2,8.2,0,0,0,4.053,17H2a2,2,0,0,0-2,2v4a1,1,0,0,0,2,0V19H4.93a8.248,8.248,0,0,0,14.14,0H22v4a1,1,0,0,0,2,0V19a2,2,0,0,0-2-2H19.947a8.2,8.2,0,0,0,.325-2.273A8.37,8.37,0,0,0,20.2,13.7l-.175-.7H23a1,1,0,0,0,0-2H19.522L18.513,7ZM12,21a6.279,6.279,0,0,1-6.272-6.273A6.188,6.188,0,0,1,5.775,14L7.805,5.97a4.448,4.448,0,0,1,8.376-.041L18.225,14a6.188,6.188,0,0,1,.047.725A6.279,6.279,0,0,1,12,21Z"/></svg>
        <svg class="close-icon" viewBox="0 0 512 512">
            <path d="M278.6 256l68.2-68.2c6.2-6.2 6.2-16.4 0-22.6-6.2-6.2-16.4-6.2-22.6 0L256 233.4l-68.2-68.2c-6.2-6.2-16.4-6.2-22.6 0-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3l68.2 68.2-68.2 68.2c-3.1 3.1-4.7 7.2-4.7 11.3 0 4.1 1.6 8.2 4.7 11.3 6.2 6.2 16.4 6.2 22.6 0l68.2-68.2 68.2 68.2c6.2 6.2 16.4 6.2 22.6 0 6.2-6.2 6.2-16.4 0-22.6L278.6 256z"/>
        </svg>
    </label>
</div>
<div class="sticky-chat">
    <div class="chat-content">
        <div class="chat-header">
            <svg viewBox="0 0 32 32">
                <path d="M24,22a1,1,0,0,1-.64-.23L18.84,18H17A8,8,0,0,1,17,2h6a8,8,0,0,1,2,15.74V21a1,1,0,0,1-.58.91A1,1,0,0,1,24,22ZM17,4a6,6,0,0,0,0,12h2.2a1,1,0,0,1,.64.23L23,18.86V16.92a1,1,0,0,1,.86-1A6,6,0,0,0,23,4Z"/>
                <rect height="2" width="2" x="19" y="9"></rect>
                <rect height="2" width="2" x="14" y="9"></rect>
                <rect height="2" width="2" x="24" y="9"></rect>
                <path d="M8,30a1,1,0,0,1-.42-.09A1,1,0,0,1,7,29V25.74a8,8,0,0,1-1.28-15,1,1,0,1,1,.82,1.82,6,6,0,0,0,1.6,11.4,1,1,0,0,1,.86,1v1.94l3.16-2.63A1,1,0,0,1,12.8,24H15a5.94,5.94,0,0,0,4.29-1.82,1,1,0,0,1,1.44,1.4A8,8,0,0,1,15,26H13.16L8.64,29.77A1,1,0,0,1,8,30Z"/>
            </svg>
            <div class="title">پشتیبانی فنی ایران نوا<span class="mt-1">گزارش مشکل فنی</span>
            </div>
        </div>
        <div class="chat-text"><span>سلام چطور میتونم کمکتون کنم؟</span>
            <span class="typing">
        <svg viewBox="0 0 512 512">
          <circle cx="256" cy="256" r="48"></circle>
          <circle cx="416" cy="256" r="48"></circle>
          <circle cx="96" cy="256" r="48"></circle>
        </svg>
       </span>
        </div>
    </div>
    <div class="chat-button" >
        <div class="msg-box-input">
             <input class="form-control" placeholder="تایپ کنید ..." type="text">
        </div>
        <div >
          <svg viewBox="0 0 32 32">
              <path d="M19.47,31a2,2,0,0,1-1.8-1.09l-4-7.57a1,1,0,0,1,1.77-.93l4,7.57L29,3.06,3,12.49l9.8,5.26,8.32-8.32a1,1,0,0,1,1.42,1.42l-8.85,8.84a1,1,0,0,1-1.17.18L2.09,14.33a2,2,0,0,1,.25-3.72L28.25,1.13a2,2,0,0,1,2.62,2.62L21.39,29.66A2,2,0,0,1,19.61,31Z"/>
          </svg>
        </div>
    </div>
</div>
