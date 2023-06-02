<head>
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <?php foreach ($usser as $usu) { ?>
        <div style="margin-left: 50px;">
            <form action='' class='form'>
                <p class='field required'>
                    <label class='label required' for='name' style="color:rgb(0 0 0);">Nombre</label>
                    <input class='text-input' id='name' name='name' placeholder="Cambiar Nombre" required type='text' value=<?php echo $usu['user_name']; ?>>
                </p>
                <p class='field required half'>
                    <label class='label' for='email' style="color:rgb(0 0 0);">E-mail</label>
                    <input class='text-input' id='email' name='email' placeholder="Cambiar E-mail" required type='email' value=<?php echo $usu['email']; ?>>
                </p>
                <p class='field half'>
                    <label class='label' for='phone' style="color:rgb(0 0 0);">Contraseña</label>
                    <input class='text-input' id='phone' placeholder="Cambiar Contraseña" name='phone' type='password' value="*******">
                </p>


                <p class='field'>
                    <label class='label' for='about' style="color:rgb(0 0 0);">Descripcion</label>
                    <textarea class='textarea' cols='50' id='about' name='about' rows='4'></textarea>
                </p>
                <label for="inputEmail4" class="titulo_2">Adjuntar imagen</label>

                    <input type="file" class="text-input border-dark"  name="principal_img" id="principal_img">
                
                <p class='field half'>
                    <input class='button' type='submit' value='Send'>
                </p>
            </form>

        <?php } ?>
        </div>
        </div>
</body>
<!-- <div class='field'>
                <label class='label'>Sport?</label>
                <ul class='checkboxes'>
                    <li class='checkbox'>
                        <input class='checkbox-input' id='choice-0' name='choice' type='checkbox' value='0'>
                        <label class='checkbox-label' for='choice-0'>Football</label>
                    </li>
                    <li class='checkbox'>
                        <input class='checkbox-input' id='choice-1' name='choice' type='checkbox' value='1'>
                        <label class='checkbox-label' for='choice-1'>Basketball</label>
                    </li>
                    <li class='checkbox'>
                        <input class='checkbox-input' id='choice-2' name='choice' type='checkbox' value='2'>
                        <label class='checkbox-label' for='choice-2'>Volleyball</label>
                    </li>
                    <li class='checkbox'>
                        <input class='checkbox-input' id='choice-3' name='choice' type='checkbox' value='3'>
                        <label class='checkbox-label' for='choice-3'>Golf</label>
                    </li>
                    <li class='checkbox'>
                        <input class='checkbox-input' id='choice-4' name='choice' type='checkbox' value='4'>
                        <label class='checkbox-label' for='choice-4'>Swimming</label>
                    </li>
                </ul>
            </div> -->
<!-- <div class='field'>
                <label class='label'>Favourite JS framework</label>
                <ul class='options'>
                    <li class='option'>
                        <input class='option-input' id='option-0' name='option' type='radio' value='0'>
                        <label class='option-label' for='option-0'>React</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-1' name='option' type='radio' value='1'>
                        <label class='option-label' for='option-1'>Vue</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-2' name='option' type='radio' value='2'>
                        <label class='option-label' for='option-2'>Angular</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-3' name='option' type='radio' value='3'>
                        <label class='option-label' for='option-3'>Riot</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-4' name='option' type='radio' value='4'>
                        <label class='option-label' for='option-4'>Polymer</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-5' name='option' type='radio' value='5'>
                        <label class='option-label' for='option-5'>Ember</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-6' name='option' type='radio' value='6'>
                        <label class='option-label' for='option-6'>Meteor</label>
                    </li>
                    <li class='option'>
                        <input class='option-input' id='option-7' name='option' type='radio' value='7'>
                        <label class='option-label' for='option-7'>Knockout</label>
                    </li>
                </ul>
            </div> -->