@extends('Layouts.header')
@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-sm-10 col-md-10 col-lg-6 col-xl-5 text-center p-0 mt-3 mb-2 ">
                <div class="d-flex flex-column col-12 card p-2 rounded-5">
                    <h2 id="heading">Where should we sent the order?</h2>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempora accusamus dicta totam, ipsam,
                        accusantium sapiente harum officia quisquam, ullam velit repellat. Exercitationem quia tenetur
                        officiis ut temporibus alias non odit.</p>
                    <form id="msform" class="m-2">
                        <!-- progressbar -->
                        <ul id="progressbar" class="d-flex justify-content-center">
                            <li class="active" id="account" ><strong>Envio</strong></li>
                            <li id="personal"><strong>Pago</strong></li>
                            <li id="payment"><strong>Compra</strong></li>
                        </ul>
                        <!-- fieldsets -->
                        <fieldset class="">
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Envio de la artesania:</h2>
                                    </div>
                                </div>
                                <div class="col-12 d-flex flex-wrap">

                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Nombre</label> <input type="email" name="email" class="form-control"
                                            placeholder="nombre" value="nombre"/>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Direccion</label> <input type="email" name="email" class="form-control"
                                            placeholder="direccion" value="direccion" />
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Municipio</label> <input type="email" name="email" class="form-control"
                                            placeholder="municipio" value="municipio" />
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Pais</label> <input type="email" name="email" class="form-control"
                                            placeholder="pais" value="pais" />
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Codigo Postal</label> <input type="email" name="email" class="form-control"
                                            placeholder="codigo postal" value="codigo_postal" />
                                    </div>
                                </div>

                            </div> <input type="button" name="next" class="next action-button btn" value="Next" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Forma de Pago:</h2>
                                    </div>

                                </div>
                                <div class="col-12 d-flex flex-wrap">

                                    <div class="col-6 mb-3">
                                        <label class="fieldlabels">Targeta de Credito</label>                                        
                                        <picture class="w-50 p-1">
                                            <img  src="../img/cards1.png" class="img-fluid"/>
                                        </picture>
                                    </div>
                                    <div class="col-6 mb-4">
                                        <label class="fieldlabels">Targeta de Debito</label>                                         
                                        <picture class="w-50 p-1">
                                            <img  src="../img/cards2.png" class="img-fluid"/>
                                        </picture>
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Nombre del titular</label> <input type="email" name="email" class="form-control"
                                            placeholder="como aparece en la targeta" />
                                    </div>
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Nombre de la targeta</label> <input type="email" name="email" class="form-control"
                                            placeholder="" />
                                    </div>
                                    <div class="col-6 mb-2 d-flex flex-wrap">
                                        <label class="fieldlabels col-12 p-0">Fecha de expiracion</label> 
                                        <input type="number" name="email" class="form-control w-25 mx-2"
                                            placeholder="Mes" />
                                            <input type="number" name="email" class="form-control w-25"
                                            placeholder="Año" />
                                    </div>
                                    <div class="col-6 mb-2 d-flex flex-wrap">
                                        <label class="fieldlabels col-12 p-0">Codigo de seguridad</label> 
                                        <input type="email" name="email" class="form-control w-50 "
                                            placeholder="3 digitos" />
                                        <picture class="w-50 p-1">
                                            <img  src="../img/cvv.png" class="img-fluid"/>
                                        </picture>

                                    </div>
                                </div>
                            </div> <input type="button" name="next" class="next action-button" value="Next" /> <input
                                type="button" name="previous" class="previous action-button-previous" value="Previous" />
                        </fieldset>
                        <fieldset>
                            <div class="form-card">
                                <div class="row">
                                    <div class="col-7">
                                        <h2 class="fs-title">Unidades:</h2>
                                    </div>

                                </div>
                                <div class="col-12 d-flex flex-wrap">
                                    <div class="col-6 mb-2">
                                        <label class="fieldlabels">Unidades</label> 
                                        <input type="number" class="form-control" data-numspin numspin-input-scheme="flat" step="1" min="0" max="10" value="1" readonly>
                                    </div>
                                </div>
                            </div>
                            <button class="next action-button">comprar</button>
                                <input type="button" name="previous" class="previous action-button-previous"
                                    value="Previous" />
                                
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {

            var current_fs, next_fs, previous_fs; //fieldsets
            var opacity;
            var current = 1;
            var steps = $("fieldset").length;

            setProgressBar(current);

            $(".next").click(function() {

                current_fs = $(this).parent();
                next_fs = $(this).parent().next();

                //Add Class Active
                $("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");

                //show the next fieldset
                next_fs.show();
                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        next_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(++current);
            });

            $(".previous").click(function() {

                current_fs = $(this).parent();
                previous_fs = $(this).parent().prev();

                //Remove class active
                $("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");

                //show the previous fieldset
                previous_fs.show();

                //hide the current fieldset with style
                current_fs.animate({
                    opacity: 0
                }, {
                    step: function(now) {
                        // for making fielset appear animation
                        opacity = 1 - now;

                        current_fs.css({
                            'display': 'none',
                            'position': 'relative'
                        });
                        previous_fs.css({
                            'opacity': opacity
                        });
                    },
                    duration: 500
                });
                setProgressBar(--current);
            });

            function setProgressBar(curStep) {
                var percent = parseFloat(100 / steps) * curStep;
                percent = percent.toFixed();
                $(".progress-bar")
                    .css("width", percent + "%")
            }

            $(".submit").click(function() {
                return false;
            })

        });




        document.querySelectorAll("[data-numspin").forEach(function(element){
    // input dom
    var parent = element.parentNode;
    var wrapper = document.createElement('div');
    wrapper.className = "input-group input-numspin-element";
    parent.replaceChild(wrapper, element);
    wrapper.appendChild(element);

    var minusBtnVal = '<button class="btn btn-primary minus-btn" type="button">-</button>';
    element.insertAdjacentHTML("beforebegin", minusBtnVal);

    var plusBtnVal = '<button class="btn btn-primary plus-btn" type="button">+</button>';
    element.insertAdjacentHTML("afterend", plusBtnVal);

    var maxVal;
    var minVal;
    var numInput = element;
    //min, max and step values
    if (numInput.hasAttribute('step')) {
        step = parseInt(numInput.getAttribute('step'), 10);
    } else {
        step = 1;
    }
    if (numInput.hasAttribute('max')) {
        maxVal = parseInt(numInput.getAttribute('max'), 10);
    } else {
        maxVal = 99999;
    }
    if (numInput.hasAttribute('min')) {
        minVal = parseInt(numInput.getAttribute('min'), 10);
    } else {
        minVal = 0;
    }
    if (!numInput.hasAttribute('pattern')) {
        numInput.setAttribute('pattern', '[0-9]');
    }
    if(numInput.hasAttribute('data-prefix')){
        var prefixVal = numInput.getAttribute('data-prefix');
        var prefixElem = '<span class="input-group-text">'+prefixVal+'</span>';
        element.insertAdjacentHTML("beforebegin", prefixElem);
    }

    if(numInput.hasAttribute('data-suffix')){
        var suffixVal = numInput.getAttribute('data-suffix');
        var suffixElem = '<span class="input-group-text">'+suffixVal+'</span>';
        element.insertAdjacentHTML("afterend", suffixElem);
    }

    // sizing
    if(numInput.hasAttribute('numspin-input-size')){
        var sizingVal = numInput.getAttribute('numspin-input-size');
        if(sizingVal == "sm"){
            wrapper.classList.add("input-group-sm");
        }
    }

    // style
    if(numInput.hasAttribute('numspin-input-style')){
        var styleVal = numInput.getAttribute('numspin-input-style');
        if(styleVal == "rounded"){
            wrapper.classList.add("numspin-input-rounded");
        }else if(styleVal == "square"){
            wrapper.classList.add("numspin-input-square");
        }
    }

    // style
    if(numInput.hasAttribute('numspin-input-scheme')){
        var schemeVal = numInput.getAttribute('numspin-input-scheme');
        if(schemeVal == "solid"){
            wrapper.classList.add("numspin-scheme-solid");
        }else if(schemeVal == "flat"){
            wrapper.classList.add("numspin-scheme-flat");
        }else if(schemeVal == "flat-light"){
            wrapper.classList.add("numspin-scheme-flat-light");
        }
    }

    // click events
    new DOMParser().parseFromString(wrapper, "text/html");
    wrapper.querySelector(".plus-btn").addEventListener("click", function(){
        newInputVal = parseInt(numInput.value, 10) + step;

        if (newInputVal <= maxVal) {
            numInput.value = newInputVal;
        }
    })

    wrapper.querySelector(".minus-btn").addEventListener("click", function(){
        newInputVal = parseInt(numInput.value, 10) - step;

        if (newInputVal >= minVal) {
            numInput.value = newInputVal;
        }
    })
});
    </script>
@endsection
