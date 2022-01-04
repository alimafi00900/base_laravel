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
<div class="search-dropdown" id="{{$itemName}}-selector">
    <input autocomplete="off" type="text" class="form-control"
           id="{{$itemName}}-name" value="{{$itemInputValue}}" required>
    <input autocomplete="off" type="text" class="form-control"
          style="display: none" name="{{$itemName}}" id="{{$itemName}}-id" value="{{$itemInputValue}}" required>
    <div id="search-dropdown-loading" style="display: none">
        <div id="spinner" style="position: relative;height: 47px">
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
    <a id="clear-btn"
       style="color:white;position: absolute;top: -2px;left: 77px;"
       class="btn btn-sm btn-danger">X
    </a>
    <a id="search-btn"
       style="color: white;position: absolute;top: -2px;left: 0px;"
       class="btn btn-sm btn-info">جستجو
    </a>
    <ul class="list-group shadow-lg">
    </ul>
</div>
