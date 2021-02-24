<!DOCTYPE html>
<html>

<head>
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="<?=  base_url()?>adm_assets/img/icon.png">
    <title>Resume Maker | Design your resume for free, no sign-up required</title>
    <meta name="description" content="Free resume builder online. No sign-up required. Create your resume in real time and download a print-ready PDF.">
    <meta name="keywords" content="Resume, builder, CV, resume builder, project, free resume maker, resume maker">
    <meta name="author" content="MR LK">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?=  base_url()?>adm_assets/css/style.css" />
    <style>
        #hideall {
            position: fixed;
            left: 0px;
            right: 0px;
            top: 0px;
            bottom: 0px;
            background-color: white;
            z-index: 999999999;
            transition: opacity .5s linear;
            pointer-events: none;
        }
    </style>
    <script>
        var langCode = navigator.language || navigator.userLanguage;
        var lang = langCode.toLowerCase();
        lang = lang.substr(0, 2);
        if (window.location.href.indexOf("en") > -1) {} else if (lang == "es") {
            window.location.href = "es"
        } else if (lang == "it") {
            window.location.href = "it"
        } else if (lang == "fr") {
            window.location.href = "fr"
        } else if (lang == "de") {
            window.location.href = "de"
        } else if (lang == "pt") {
            window.location.href = "pt"
        } else if (lang == "zh") {
            window.location.href = "zh"
        }
    </script>
    <meta name="twitter:description" content="Design your resume and download a print-ready PDF. 100% FREE + No sign-up required">
    
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Resume Maker | Design your resume for free, no sign-up required" />
    <meta property="og:description" content="Design your resume and download a print-ready PDF. 100% FREE + No sign-up required" />
    <meta property="og:image" content="https://www.resumemaker.online/img/twittercard.jpg" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?=  base_url()?>adm_assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?=  base_url()?>adm_assets/img/icon.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?=  base_url()?>adm_assets/img/icon.png">
    <link rel="manifest" href="<?=  base_url()?>adm_assets/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff"> </head>

<body>
    <div id="hideall">
        <div class="logo2"></div>
        <div class="centradovertical"><img src="<?=  base_url()?>adm_assets/img/oval1.svg" style="width:55px;opacity:.5;"></div>
    </div>
    <div class="loading">
        <div class="loading_gradient"></div>
        <div class="centradovertical"><img src="<?=  base_url()?>adm_assets/img/oval.svg" style="width:55px"></div>
    </div>
    <div id="edit">
        <div id="hover_submenu" style="pointer-events:none"></div>
        <div id="menu_edicion">
            <div class="menu_cont">
                <div class="menu_item menu_link" style="border-left:0;">
                    <div class="color_picker" id="color_selected"></div><span class="menu_label menos4">COLOR</span>
                    <div class="submenu">
                        <div id="picker1" class="color_picker picker_activo" style="background:#0b7af3;" onClick="javascript:cambiarcolor('#0b7af3','1') ;"></div>
                        <div id="picker2" class="color_picker" style="background:#ff4828" onClick="javascript:cambiarcolor('#ff4828','2');"></div>
                        <div id="picker3" class="color_picker" style="background:#c51263" onClick="javascript:cambiarcolor('#c51263','3');"></div>
                        <div id="picker4" class="color_picker" style="background:#2ab993" onClick="javascript:cambiarcolor('#2ab993','4');"></div>
                        <div id="picker5" class="color_picker" style="background:#252525" onClick="javascript:cambiarcolor('#000000','5');"></div>
                        <div class="color_picker_custom color_picker"> <input id="selectorcolor" type="color" value="#006ce7" onChange="javascript:cambiarcolor($(this).val(),'0');" /></div>
                    </div>
                </div>
                <div class="menu_item"> <select id="selectortipo" onChange="javascript:cambiartipografia();"> <option style="font-family: Poppins" selected="selected">Poppins</option> <option style="font-family: Nunito ">Nunito</option> <option style="font-family: Merriweather">Merriweather</option> <option style="font-family: Inconsolata">Inconsolata</option> <option style="font-family: Karla">Karla</option> <option style="font-family: Fira Sans">Fira Sans</option> <option style="font-family: Saira Semi Condensed">Saira Semi Condensed</option> </select>                    <span class="menu_label">TYPOGRAPHY</span> </div>
                <div class="menu_item">
                    <div id="selector_tamano">
                        <div onClick="javascript:cambiartamano('Pequeño');" class="label_font_size font_size_small">A</div>
                        <div onClick="javascript:cambiartamano('Mediano');" class="label_font_size font_size_medium label_font_active">A</div>
                        <div onClick="javascript:cambiartamano('Grande');" class="label_font_size font_size_big">A</div>
                    </div><span class="menu_label">TEXT SIZE</span> </div>
                <div class="menu_item menu_link" style="border-right: 1px solid #8080803b;" id="menu_secciones"> <img src="<?=  base_url()?>adm_assets/img/icon_section.svg" id="icon_sections" /> <span class="menu_label">SECTIONS</span>
                    <div class="submenu submenu_sections">
                        <div style="width:40%;border-right: 1px solid #80808026;"> <input class="tgl tgl-flat" type="checkbox" id="foto_check" onChange="javascript:mostrarocultar();" checked="checked" /> <label class="tgl-btn" for="foto_check"><span class="label_grandes">Picture</span></label> <input class="tgl tgl-flat"
                                type="checkbox" id="perfil_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn" for="perfil_check"><span class="label_grandes">Profile / Objective </span></label> <span class="titulo_submenu_secciones">PERSONAL DETAILS</span>                            <input class="tgl tgl-flat" type="checkbox" onChange="javascript:mostrarocultar();" checked="checked" id="nacimiento_check" /> <label class="tgl-btn" for="nacimiento_check"><span>Birth date</span></label> <input class="tgl tgl-flat"
                                type="checkbox" onChange="javascript:mostrarocultar();" checked="checked" id="nacionalidad_check" /> <label class="tgl-btn" for="nacionalidad_check"><span>Nationality</span></label> <input class="tgl tgl-flat" type="checkbox"
                                onChange="javascript:mostrarocultar();" checked="checked" id="domicilio_check" /> <label class="tgl-btn" for="domicilio_check"><span>Address</span></label> <input class="tgl tgl-flat" type="checkbox" onChange="javascript:mostrarocultar();"
                                id="estadocivil_check" /> <label class="tgl-btn" for="estadocivil_check"><span>Marital status</span></label> <span class="titulo_submenu_secciones">CONTACT</span> <input class="tgl tgl-flat" type="checkbox" id="email_check"
                                onChange="javascript:mostrarocultar();" checked="checked" disabled="disabled" /> <label class="tgl-btn" for="email_check"><span>Email</span></label> <input class="tgl tgl-flat" type="checkbox" id="tel_check" onChange="javascript:mostrarocultar();"
                                checked="checked" /> <label class="tgl-btn" for="tel_check"><span>Phone number</span></label> <input class="tgl tgl-flat" type="checkbox" id="skype_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn" for="skype_check"><span>Skype</span></label>                            <input class="tgl tgl-flat" type="checkbox" id="website_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn" for="website_check"><span>Website</span></label> <input class="tgl tgl-flat" type="checkbox" id="linkedin_check"
                                onChange="javascript:mostrarocultar();"> <label class="tgl-btn" for="linkedin_check"><span>LinkedIn</span></label> <input class="tgl tgl-flat" type="checkbox" id="facebook_check" onChange="javascript:mostrarocultar();" />
                            <label class="tgl-btn" for="facebook_check"><span>Facebook</span></label> <input class="tgl tgl-flat" type="checkbox" id="twitter_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn" for="twitter_check"><span>Twitter</span></label>                            <input class="tgl tgl-flat" type="checkbox" id="instagram_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn" for="instagram_check"><span>Instagram</span></label> </div>
                        <div style="width:60%;"> <input class="tgl tgl-flat" type="checkbox" disabled="disabled" checked="checked" /> <label class="tgl-btn"><span class="label_grandes">Name</span></label> <input class="tgl tgl-flat" type="checkbox" id="titulo_check" onChange="javascript:mostrarocultar();"
                                checked="checked" /> <label class="tgl-btn" for="titulo_check"><span class="label_grandes">Profession / Specialty</span></label> <input class="tgl tgl-flat" type="checkbox" id="experiencia_check" onChange="javascript:mostrarocultar();"
                                checked="checked" /> <label class="tgl-btn" for="experiencia_check"><span class="label_grandes">Professional Experience</span></label> <input class="tgl tgl-flat" type="checkbox" checked="checked" disabled="disabled" />
                            <label class="tgl-btn"><span class="label_grandes">Education</span></label> <span class="titulo_submenu_secciones">MAIN SKILLS</span> <span class="descripcion_listas">Ideal for listing the most relevant skills for the type of job you´ll be applying.</span>                            <input class="tgl tgl-flat" type="checkbox" id="skills3_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble1" for="skills3_check"><span>List 1</span></label> <input class="tgl tgl-flat" type="checkbox"
                                id="skills4_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble2" for="skills4_check"><span>List 2</span></label> <span class="titulo_submenu_secciones">COMPLEMENTARY SKILLS</span> <span class="descripcion_listas">Ideal for listing languages or software knowledge.</span>                            <input class="tgl tgl-flat" type="checkbox" id="skills1_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble1" for="skills1_check"><span>List 1</span></label> <input class="tgl tgl-flat" type="checkbox"
                                id="skills2_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble2" for="skills2_check"><span>List 2</span></label> <span class="titulo_submenu_secciones">ADDITIONAL INFORMATION</span> <span class="descripcion_listas">Ideal for listing interests, references or awards.</span>                            <input class="tgl tgl-flat" type="checkbox" id="list1_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble1" for="list1_check"><span>List 1</span></label> <input class="tgl tgl-flat" type="checkbox"
                                id="list2_check" onChange="javascript:mostrarocultar();" /> <label class="tgl-btn doble2" for="list2_check"><span>List 2</span></label> </div>
                    </div>
                </div>
                <div class="menu_item hidemobile" style="border:none">
                    <div onClick="javascript:cambiarhoja('A4');" class="hoja_icon hoja_active hoja_a4">
                        <div class="hoja_tip"></div>
                        <div class="hoja_tip2"></div>
                    </div><span class="menu_label label_absolute">A4</span> </div>
                <div class="menu_item hidemobile" style="border:none;padding-left:1.25rem;padding-right:1.2rem;">
                    <div onClick="javascript:cambiarhoja('Carta');" class="hoja_icon hoja_carta">
                        <div class="hoja_tip"></div>
                        <div class="hoja_tip2"></div>
                    </div><span class="menu_label label_absolute">LETTER</span> </div>
                <div class="menu_item hidemobile" style="border:none;">
                    <div onClick="javascript:cambiarhoja('Oficio');" class="hoja_icon hoja_oficio">
                        <div class="hoja_tip"></div>
                        <div class="hoja_tip2"></div>
                    </div><span class="menu_label label_absolute">LEGAL</span> </div>
            </div>
            <div class="menu_btns">
                <div id="guardar_btn"><img src="<?=  base_url()?>adm_assets/img/icon_save.svg"><span class="menu_label">SAVE</span></div><label id="cargar_btn" for="inputjson"><img src="<?=  base_url()?>adm_assets/img/icon_load.svg"><span class="menu_label">LOAD</span></label> <input type='file' id="inputjson" style="display:none"
                    accept=".online" /> </div>
            <div class="menu_btns">
                <div id="preview_btn"><img src="<?=  base_url()?>adm_assets/img/icon_preview.svg">PREVIEW</div>
                <div id="download_btn"> <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-197 320.9 200 200" style="enable-background:new -197 320.9 200 200;" xml:space="preserve"> <path class="st0" d="M-75.7,416.3H-49l-48,45.9l-48-45.9h26.6v-50.5h42.6v50.5H-75.7z M-70.4,466.8h-53.3v9.2h53.3 C-70.4,476-70.4,466.8-70.4,466.8z"/> <path class="st0" d="M-562,752.5h23.8l-42.8,47.6l-42.8-47.6h23.8v-42.4h38.1L-562,752.5L-562,752.5z M-547.7,790.6v14.3h-66.6 v-14.3h-9.5v23.8h85.7v-23.8H-547.7z"/> </svg>                    <span>DOWNLOAD PDF</span> </div>
            </div>
        </div>
        <div id="wrapper">
            <div id="imprimir" class="template1">
                <div id="contimprimir">
                    <ul>
                        <li class="li25" id="foto"> <label for="inputfoto2" style="cursor:pointer"> <div class="cont_fotodiv"> <div id="inserta_imagenlabel"><img src="<?=  base_url()?>adm_assets/img/icon_image.svg">SELECT YOUR PICTURE</div></div></label> <input type='file' id="inputfoto2" style="display:none"
                                accept="image/*" /> </li>
                        <li class="li75" id="nombre_cont">
                            <div> <span></span>
                                <div class="centradovertical" id="centrado_nombre">
                                    <p class="nombre color" contenteditable="true" placeholder="Your name" id="nombre" spellcheck=false></p>
                                    <p class="titulo1" contenteditable="true" placeholder="Your profession or speciality" id="titulo"></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="li25" id="datospersonales">
                            <div id="perfil">
                                <p class="titulo1" contenteditable="true" placeholder="Perfil">Profile</p>
                                <p class="texto" contenteditable="true" placeholder="Write here a paragraph about yourself or you can change the title to read 'Objective'."></p>
                            </div>
                            <p class="titulo1 personal_title" contenteditable="true" placeholder="Datos personales">Personal details</p>
                            <div id="nacimiento">
                                <p class="titulo2 color" contenteditable="true">Birth date</p>
                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Enter your birth date"></p>
                            </div>
                            <div id="nacionalidad">
                                <p class="titulo2 color nowrap" contenteditable="true">Nationality</p>
                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Enter your nationality"></p>
                            </div>
                            <div id="domicilio">
                                <p class="titulo2 color" contenteditable="true">Address</p>
                                <p class="titulo3" contenteditable="true" placeholder="Enter your address"></p>
                            </div>
                            <div id="estadocivil" contenteditable="true">
                                <p class="titulo2 color nowrap">Marital status</p>
                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Enter your marital status"></p>
                            </div>
                            <p class="titulo1 contact_title" contenteditable="true" placeholder="Contacto">Contact</p>
                            <div class="contacto_item " id="mail">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/email.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="Enter your email"></p>
                            </div>
                            <div class="contacto_item " id="tel">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/tel.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="Enter your phone number"></p>
                            </div>
                            <div class="contacto_item " id="skype">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/skype.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourUserName"></p>
                            </div>
                            <div class="contacto_item " id="website">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/website.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourWebsite.com"></p>
                            </div>
                            <div class="contacto_item " id="linkedin">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/linkedin.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourProfile"></p>
                            </div>
                            <div class="contacto_item " id="facebook">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/facebook.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourProfile"></p>
                            </div>
                            <div class="contacto_item " id="twitter">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/twitter.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourUserName"></p>
                            </div>
                            <div class="contacto_item " id="instagram">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/instagram.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false placeholder="yourUserName"></p>
                            </div>
                        </li>
                        <li class="li75">
                            <div id="bloqueprincipal">
                                <p class="titulo1" id="titulo_laboral" contenteditable="true" placeholder="Professional experience">Professional experience</p>
                                <div class="sortable experiencialaboral" id="experiencialaboral">
                                    <div class="cuadro ui-state-default" id="experiencia1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Position"></p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="Employer"></p>
                                        <p class="fecha" contenteditable="true" placeholder="From - Until"></p>
                                        <p class="texto" contenteditable="true" placeholder="In this text field your can describe your duties. Try to focus on accomplishments that serve as concrete examples to the type of problems you can solve to your future employer."></p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                </div>
                                <p class="titulo1 education_title" contenteditable="true" placeholder="Education">Education</p>
                                <div class="sortable formacionacademica" id="formacionacademica">
                                    <div class="cuadro ui-state-default" id="formacion1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Degree"></p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="School"></p>
                                        <p class="fecha" contenteditable="true" placeholder="From - Until"></p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="bloquesecundario">
                                <ul>
                                    <li class="li50 estrellasjuntas" id="skills_large1">
                                        <p class="titulo1" contenteditable="true" placeholder="Custom text"></p>
                                        <div id="estrellascircular" class="sortable">
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje25"></div>
                                                        <div class="porcentaje50"></div>
                                                        <div class="porcentaje75"></div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="centradovertical porcentajetexto">25%</div>
                                                    </div>
                                                </div>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li50" id="skills_large2">
                                        <p class="titulo1" contenteditable="true" placeholder="Custom text"></p>
                                        <div id="estrellascircular" class="sortable">
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje25"></div>
                                                        <div class="porcentaje50"></div>
                                                        <div class="porcentaje75"></div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="centradovertical porcentajetexto">25%</div>
                                                    </div>
                                                </div>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <div style="clear:both"></div>
                                    <li class="li50" id="skills_small1">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text"></p>
                                        <div id="estrellas" class="sortable ">
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="centradovertical" style="left:2rem;right:auto !important;">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                </div>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li50" id="skills_small2">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text"></p>
                                        <div id="estrellas" class="sortable ">
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="centradovertical" style="left:auto;right:0;width:50%">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                </div>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li50" id="simple_list1">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text"></p>
                                        <div id="otros" class="sortable">
                                            <div id="otros1" class="cuadro ui-state-default">
                                                <div class="check_img_cont"><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/check.png"></div>
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li50" id="simple_list2">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text"></p>
                                        <div id="intereses" class="sortable">
                                            <div id="intereses1" class="cuadro ui-state-default">
                                                <div class="check_img_cont"><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/check.png"></div>
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item"></p>
                                                <div class="mover">
                                                    <div class="labelbotones">Reorder</div>
                                                </div>
                                                <div class="eliminar">
                                                    <div class="labelbotones">Remove</div>
                                                </div>
                                                <div class="clonar">
                                                    <div class="labelbotones">Add new</div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div style="clear:both"></div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="fin_hoja_anim">
                    <div class="fin_hoja"></div>
                </div>
            </div>
            <div id="extras_abajo2">
                <a href="https://www.instagram.com/_mr__lk_/" target="_blank" style="text-decoration:none">
                    <div id="firma2">By Laxmikant Verma</div>
                </a>
                <div id="idioma2"> <select id="selector_idioma2" onChange="javascript:cambiaridioma2();"> <option selected="selected">English</option> <option>Español</option> <option>Francais</option> <option>Deutsch</option> <option>Italiano</option> <option >Português</option> </select>
                    <div id="idioma_icon2"></div>
                </div>
                <div id="privacy2" onClick="javascript:abrirmodal('modal_privacy');">Privacy</div>
                <div id="share2"> Share
                    <div class="share_imgs"> <img src="<?=  base_url()?>adm_assets/img/icon_sharefb.svg" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('http://www.resumemaker.online/'),'facebook-share-dialog','width=626,height=436'); return false;"><img src="<?=  base_url()?>adm_assets/img/icon_sharetw.svg"
                            onclick="javascript:window.open('https://twitter.com/share?text=Design your resume for free and download a print-ready PDF. No sign-up required.&amp;url=http://www.resumemaker.online/','Twitter-dialog','width=626,height=436'); return false;">                        </div>
                </div>
            </div>
        </div>
        <div id="preview_cont">
            <div id="cerrar_overlay"></div>
            <div class="logo"></div>
            <div id="zoom_note">MOUSE WHEEL TO ZOOM</div>
            <div id="close_preview">GO BACK</div>
            <div id="downloadenpreview_btn"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="-197 320.9 200 200" style="enable-background:new -197 320.9 200 200;" xml:space="preserve"> <path class="st0" d="M-75.7,416.3H-49l-48,45.9l-48-45.9h26.6v-50.5h42.6v50.5H-75.7z M-70.4,466.8h-53.3v9.2h53.3 C-70.4,476-70.4,466.8-70.4,466.8z"/> <path class="st0" d="M-562,752.5h23.8l-42.8,47.6l-42.8-47.6h23.8v-42.4h38.1L-562,752.5L-562,752.5z M-547.7,790.6v14.3h-66.6 v-14.3h-9.5v23.8h85.7v-23.8H-547.7z"/> </svg>
                <div class="labelbotones">Download PDF</div>
            </div>
        </div>
        <div id="modal_sepaso" class="modal">
            <div class="centradovertical">
                <div class="cerrar_modal cerrar_nosepuede" onClick="javascript:cerrarmodal();"></div><img src="<?=  base_url()?>adm_assets/img/icon_mal.svg" />
                <h2>Size exceeded</h2>
                <p>Did you know that a <strong>hiring managers take on avarage 6 seconds to read resumes</strong>?<br><br>By keeping your resume short and focused on one page you are giving them fewer reasons to eliminate you from contention. </p>
                <div class="btn cerrar_nosepuede" onClick="javascript:cerrarmodal();">ACCEPT</div>
                <div class="checkbox-container"><input type="checkbox" id="modal_check1" /><label class="checkbox" for="modal_check1"></label><label for="modal_check1">Don´t show again</label> </div>
            </div>
        </div>
        <div id="modal_tamanook" class="modal" style="">
            <div class="centradovertical">
                <div class="cerrar_modal" onClick="javascript:cerrarmodal();"></div><img src="<?=  base_url()?>adm_assets/img/icon_ok.svg" />
                <h2>Size no longer exceeded</h2>
                <p>Preview and download buttons are active again.</p>
                <div class="btn" onClick="javascript:cerrarmodal();">ACCEPT</div>
                <div class="checkbox-container"><input type="checkbox" id="modal_check2" /><label class="checkbox" for="modal_check2"></label><label for="modal_check2">Don´t show again</label> </div>
            </div>
        </div>
        <div id="modal_nosepuede" class="modal" style="">
            <div class="centradovertical">
                <div class="cerrar_modal cerrar_nosepuede" onClick="javascript:cerrarmodal();"></div><img src="<?=  base_url()?>adm_assets/img/icon_mal.svg" />
                <h2>Size exceeded</h2>
                <p>Sorry, you can´t preview or download your resume because the content exceeds the page margins.</p>
                <div class="btn cerrar_nosepuede" onClick="javascript:cerrarmodal();">ACCEPT</div>
            </div>
        </div>
        <div id="modal_gracias" class="modal">
            <div class="centradovertical">
                <div class="cerrar_modal" onClick="javascript:cerrarmodal();"></div><img class="btn" style="display: inline-block;padding: 0;line-height: 0;margin-bottom: 1.25rem;cursor: default;width:25rem;box-shadow: inset 0 0 0 1px white;border-radius: 0" src="<?=  base_url()?>adm_assets/img/logo_resumebuild.svg" />
                <h2>Take your resume to the next level</h2>
                <p style="text-align: center">Trusted by millions of job-seekers worldwide, <strong>Resumebuild.com helps you land your dream job</strong> by showing employers exactly what they want to see.</p>
                <a href="https://resumebuild.com/" target="_blank" onclick="javascript:gtag('event', 'ResumeBuild')" style="text-decoration: none">
                    <div class="btn">BUILD MY RESUME</div>
                </a>
            </div>
        </div>
        <div id="modal_saveshare" class="modal">
            <div class="centradovertical">
                <div class="cerrar_modal" onClick="javascript:cerrarmodal();"></div>
                <h2>Share to save</h2>
                <p style="text-align: center;margin-bottom:1.25rem">In order to save your resume for later editing, the only thing we ask our users is to help us spread the word by sharing a link to this website on social media <strong>for one time only</strong> per resume. Thank you so much!</br>
                    </br>Choose the social media of your preference, click on <strong>share and the Save button will become active</strong>. </p>
                <a href="https://www.facebook.com/sharer/sharer.php?u=HII this is lk" class="social_unlock">
                    <img src="<?=  base_url()?>adm_assets/img/facebook.png" class="facebook_unlock" />
                </a>
                <a href="https://twitter.com/share?text=Design your resume for free and download a print-ready PDF. No sign-up required!" class="social_unlock">
                    <img src="<?=  base_url()?>adm_assets/img/twitter.png" class="twitter_unlock" /></a>
                <a href="https://www.linkedin.com/shareArticle?mini=true&url=lk.in" class="social_unlock">
                    <img src="<?=  base_url()?>adm_assets/img/linkedin.png" class="linkedin_unlock" /></a>
                
                <div class="btn" id="guardar_unlocked_btn">
                    <div><img src="<?=  base_url()?>adm_assets/img/icon_lock.svg" id="lock" />SAVE FOR LATER EDITING</div>
                </div>
            </div>
        </div>
    </div>
    <div id="modal_privacy" class="modal" style="">
        <div class="centradovertical">
            <div class="cerrar_modal" onClick="javascript:cerrarmodal();"></div>
            <h2>Privacy Notice</h2>
            <p> This website does not collect the information users provide to create their resumes.<br><br>Google Analytics and Facebook Pixel are implemented to examine the use of this website. They use cookies and collect user´s usage data that Google
                and Facebook may use later to contextualize and personalize the ads of their own advertising network.<br><br>Not liability resulting from the use of this website will be considered by the author and users may use it at their own discretion.</p>
            <div class="btn cerrar_nosepuede" onClick="javascript:cerrarmodal();">ACCEPT</div>
        </div>
    </div>
    <div id="intro">
        <div class="loading_gradient"></div>
        <div class="logo moverintro"></div>
        <div class="centradovertical moverintro" id="texto_intro">
            <div style="width: 45%;text-align:left;" id="texto_intro_cont">
                <h2> Design your resume in real time and download a print-ready PDF. </h2>
                <div id="btn_empezar"><img src="<?=  base_url()?>adm_assets/img/icon_start.svg" /> <span>DESIGN MY RESUME</span> <span id="btn_note">100% free, no sign-up required</span> </div>
            </div>
        </div>
        <div id="extras_abajo" class="moverintro">
            <a href="https://www.instagram.com/_mr__lk_/" target="_blank" style="text-decoration:none">
                <div id="firma">By Laxmikant Verma</div>
            </a>
            <div id="idioma"> <select id="selector_idioma" onChange="javascript:cambiaridioma();"> <option selected="selected">English</option> <option>Español</option> <option>Francais</option> <option>Deutsch</option> <option>Italiano</option> <option >Português</option> </select>
                <div id="idioma_icon"></div>
            </div>
            <div id="privacy" onClick="javascript:abrirmodal('modal_privacy');">Privacy</div>
            <div id="share"> Share
                <div class="share_imgs"> <img src="<?=  base_url()?>adm_assets/img/icon_sharefb.svg" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;"><img src="<?=  base_url()?>adm_assets/img/icon_sharetw.svg"
                        onclick="javascript:window.open('https://twitter.com/share?text=Design your resume for free and download a print-ready PDF. No sign-up required.&amp;url=#','Twitter-dialog','width=626,height=436'); return false;">                    </div>
            </div>
        </div>
        <div id="wrapper" style="margin-top:4rem;pointer-events:none;" class="cvfalso cvfalso_anim">
            <div id="imprimir" class="template1">
                <div id="contimprimir">
                    <ul>
                        <li class="li25" id="foto">
                            <div class="cont_fotodiv" style="background:url(<?=  base_url()?>adm_assets/img/lk1.jpg);background-color:grey;"></div>
                        </li>
                        <li class="li75" id="nombre_cont">
                            <div> <span></span>
                                <div class="centradovertical" id="centrado_nombre">
                                    <p class="nombre color" contenteditable="true" placeholder="Nombre y apellido" id="nombre" spellcheck=false>Lamikant Verma</p>
                                    <p class="titulo1" contenteditable="true" placeholder="Especialidad / Título" id="titulo">Front-End developer</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul>
                        <li class="li25" id="datospersonales">
                            <p class="titulo1" contenteditable="true" placeholder="Datos personales">Personal Details</p>
                            <div id="nacimiento">
                                <p class="titulo2 color">Birth date</p>
                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Enter date here">22/10/1999</p>
                            </div>
                            <div id="nacionalidad">
                                <p class="titulo2 color nowrap">Nationality</p>
                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Enter text here">Indian</p>
                            </div>
                            <div id="domicilio">
                                <p class="titulo2 color">Address</p>
                                <p class="titulo3" contenteditable="true" placeholder="Enter text here">Raipur, Chhattisgarh</p>
                            </div>
                            <p class="titulo1" contenteditable="true" placeholder="Contacto">Contact</p>
                            <div class="contacto_item " id="tel">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/tel.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>82699XXXXX</p>
                            </div>
                            <div class="contacto_item " id="mail">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/email.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>laxmikant91111@gmail.com</p>
                            </div>
                            <div class="contacto_item " id="linkedin">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/linkedin.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>laxmikant-verma-12345/</p>
                            </div>
                            <div class="contacto_item " id="skype">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/skype.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>lk123</p>
                            </div>
                            <div class="contacto_item " id="facebook">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/facebook.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>laxmikant verma</p>
                            </div>
                            <div class="contacto_item " id="twitter">
                                <div><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/twitter.png" /></div>
                                <p class="texto" contenteditable="true" spellcheck=false>laxmikantvermaa/</p>
                            </div>
                        </li>
                        <li class="li75">
                            <div id="bloqueprincipal">
                                <p class="titulo1" id="titulo_laboral" contenteditable="true" placeholder="Experiencia laboral">Professional Experience</p>
                                <div class="sortable experiencialaboral" id="experiencialaboral">
                                    <div class="cuadro ui-state-default" id="experiencia1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Cargo">SEO Intern</p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="NorthWest Website Development">Xpert</p>
                                        <p class="fecha" contenteditable="true" placeholder="2015 - Current">June - July, 2019</p>
                                        <p class="texto" contenteditable="true" placeholder="Job Responsibilities: Keyword Research, SEO, Google Analytics, Landing Page Building."></p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                    <div class="cuadro ui-state-default" id="experiencia1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Cargo">Markting Intern</p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="Snow Cloud Media">Inventrom Pvt. Ltd.</p>
                                        <p class="fecha" contenteditable="true" placeholder="2011 - 2015">Feb - Apr, 2019</p>
                                        <p class="texto" contenteditable="true" placeholder="Job Responsibilities: Promote Internet of Things and Machine Learning online training. Increase the awareness about IoT and ML in our college by sharing videos, promo videos, etc. over various social media channels. Brand awareness and business development of Bolt IoT."></p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                </div>
                                <p class="titulo1" contenteditable="true" placeholder="Educación">Education</p>
                                <div class="sortable formacionacademica" id="formacionacademica">
                                    <div class="cuadro ui-state-default" id="formacion1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Título">Bachelor of Technology, Computer Science</p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="Escuela / Instituto / Universidad">Oriental College of Technology, Bhopal</p>
                                        <p class="fecha" contenteditable="true" placeholder="Año">2017-21</p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                    <div class="cuadro ui-state-default" id="formacion1">
                                        <div style="position:relative">
                                            <div class="timeline_bola color_estrellas"></div>
                                            <p class="titulo2 color" contenteditable="true" placeholder="Título">People's Public School, Bhopal</p>
                                        </div>
                                        <p class="titulo3" contenteditable="true" placeholder="Escuela / Instituto / Universidad">Loxahatchee College</p>
                                        <p class="fecha" contenteditable="true" placeholder="Año">2017</p>
                                        <div class="mover">
                                            <div class="labelbotones">Reorder</div>
                                        </div>
                                        <div class="eliminar">
                                            <div class="labelbotones">Remove</div>
                                        </div>
                                        <div class="clonar">
                                            <div class="labelbotones">Add new</div>
                                        </div>
                                        <div class="timeline_linea"></div>
                                    </div>
                                </div>
                            </div>
                            <div id="bloquesecundario">
                                <ul>
                                    <li class="li50 estrellasjuntas" id="skills_large1">
                                        <p class="titulo1" contenteditable="true" placeholder="Custom text">Professional Skills</p>
                                        <div id="estrellascircular" class="sortable">
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Photoshop</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="centradovertical porcentajetexto">75%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Illustrator</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="porcentaje75"></div>
                                                        <div class="centradovertical porcentajetexto">50%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Sketch</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="centradovertical porcentajetexto">75%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Figma</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="centradovertical porcentajetexto">100%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Wireframing</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="centradovertical porcentajetexto">100%</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas2" style="position:relative;" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Research</p>
                                                <div class="centradovertical centradoestrellas">
                                                    <div class="estrellacircular color_estrellas">
                                                        <div class="centradovertical">
                                                            <div class="innercircleprogress"></div>
                                                        </div>
                                                        <div class="porcentaje100"></div>
                                                        <div class="porcentaje75"></div>
                                                        <div class="centradovertical porcentajetexto">50%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <div style="clear:both"></div>
                                    <li class="li50" id="skills_small1">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text">Personal Skills</p>
                                        <div id="estrellas" class="sortable ">
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Creativity</p>
                                                <div class="centradovertical" style="left:2rem;right:auto !important;">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Organisation</p>
                                                <div class="centradovertical" style="left:2rem;right:auto !important;">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Team work</p>
                                                <div class="centradovertical" style="left:2rem;right:auto !important;">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas color_base"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="estrellas1" style="position:relative" class=" cuadro ui-state-default">
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Communication</p>
                                                <div class="centradovertical" style="left:2rem;right:auto !important;">
                                                    <div class="estrellas pos1">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos2">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos3">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                    <div class="estrellas pos4">
                                                        <div class="color_estrellas "></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="li50" id="simple_list1">
                                        <p class="titulo1 " contenteditable="true" placeholder="Custom text">Languages</p>
                                        <div id="otros" class="sortable">
                                            <div id="otros1" class="cuadro ui-state-default">
                                                <div class="check_img_cont"><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/check.png"></div>
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">English</p>
                                            </div>
                                            <div id="otros1" class="cuadro ui-state-default">
                                                <div class="check_img_cont"><img class="color_estrellas" src="<?=  base_url()?>adm_assets/img/check.png"></div>
                                                <p class="titulo3 nowrap" contenteditable="true" placeholder="Item">Hindi</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div style="clear:both"></div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="pinch">
        <div class="centradovertical"> <img src="<?=  base_url()?>adm_assets/img/icon_pinch.svg" />
            <h2>Pinch with two fingers </br>to zoom in or out</h2>
            <div class="btn color_estrellas" onClick="javascript:$(this).parent().parent().remove();">ACCEPT</div>
        </div>
    </div>
    <script type="text/javascript" src="<?=  base_url()?>adm_assets/js/jquery.js"></script>
    <script>
        if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            $("body").addClass("ismobile");
        }
        if (/iPhone|iPad|iPod/i.test(navigator.userAgent)) {
            $("body").addClass("isiphone");
        }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js" integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dom-to-image/2.6.0/dom-to-image.min.js"
    integrity="sha256-c9vxcXyAG4paArQG3xk6DjyW/9aHxai2ef9RpMWO44A=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('#download_btn').click(function () {
    domtoimage.toPng(document.getElementById('imprimir'))
        .then(function (blob) {
 
            var pdf = new jsPDF('p', 'pt', [$('#imprimir').width(), $('#imprimir').height()]);

            pdf.addImage(blob, 'PNG', 0, 0, $('#imprimir').width(), $('#imprimir').height());
            pdf.save("your-resume.pdf");

            that.options.api.optionsChanged();
        });
});
    </script>
    <script type="text/javascript" src="<?=  base_url()?>adm_assets/js/scripts.js"></script>
</body>

</html>