$(document).ready
    (
        function () {
            $('#eye').click(
                function () {
                    $(this).attr('src', 'pass_open.png');
                    $('#down').attr('src', 'pass_close.png');
                    $('#password').prop('type', 'text');



                }
            );
            $('#eye').mouseleave(
                function () {
                    $(this).attr('src', 'pass_close.png');

                    $('#password').prop('type', 'password');

                }
            );
            $('#animate').click(
                function () {
                    $('#d').animate({ top: '150px' }, 2000);
                    $('#d').animate({ left: '1550px' }, 2000);
                    $('#d').animate({ right: '1550px' }, 2000);
                }
            );
            $('#stop').click(
                function () {
                    $('#d').stop(true);
                }
            );
            $('#ani').click(
                function () {
                    $('#d').css('background', 'orange').slideUp(2000).slideDown(1000);
                }
            );
            // position 
            $('#position').click(function () {
                console.log($('#d').position());
            }
            );
            // offset
            $('#offset').click(function () {
                console.log($('#d').offset());
            }
            );
            $('#b').click(
                function () {
                    $('body').css({
                        'background': '#170614',
                    });
                    $('.v , .container').css({
                        'color': 'white',
                        'border': '2px solid white',
                    });
                    $('p').css({
                        'color': 'white',
                    });
                    $('#table').removeClass('table table-simple');
                    $('#table').addClass('table table-dark');
                }
            );
            $('#dark').click(function () {
                $('#table').addClass('container');
            });
            $('#redark').click(
                function () {
                    $('body').css({
                        'background': 'white'
                    });
                    $('.v , .container').css({
                        'color': 'black',
                        'border': '2px solid black'
                    });
                    $('p').css({
                        'color': 'black'
                    });
                    $('#table').removeClass('table table-dark');
                    $('#table').addClass('table table-simple');
                }
            );

            //    ajax
            $('#load').click(function () {
                 $('#table').toggle();
                $.ajax(
                    {
                        url: "insert.php",
                        type: "POST",
                        success: function (data) {
                            $('#table').html(data);
                           
                        }
                    }
                );
                // $('#table').toggle();
            }
            );
            function loadTable() {
                $.ajax(
                    {
                        url: "insert.php",
                        type: "POST",
                        success: function (data)
                        {
                            $('#table').html(data);
                        }
                    }
                );
            }
            // ajax insertion
            $('#save').on("click", function (e) {
                e.preventDefault();
                var name = $('#name').val();
                var number = $('#number').val();
                var choice = $('#choice').val();
                var country = $('#country').val();
                var state = $('#state').val();
                var city = $('#city').val();
                var pass = $('#pass').val();
                if (name == '' || number == '' || choice == '' || country == '' || state == '' || city == '' || pass == '') {
                    alert('Empty form will not be submitted');
                }
                else {
                    // function loadTable()
                    // {

                    $.ajax
                        (
                            {
                                url: "insert.php",
                                type: "POST",
                                data: { name: name, number: number, choice: choice, country: country, state: state, city: city , password: pass },
                                success: (data) => {
                                    if (data == 1) {
                                        alert('done');
                                        loadTable();
                                        $('#form').trigger("reset");
                                    }

                                    else {
                                        alert('np');
                                    }

                                }
                            }
                        );
                }
            }
            );
            // for delete row in jquery
            $(document).on('click', '#delete', function () 
            {
                if (confirm("Are you sure" + "\n" + "You want to delete your account")) 
                {
                    var id = $(this).data('id');
                    // alert(id);
                    $.ajax({
                        url: "data_delete.php",
                        type: "POST",
                        data: { id: id },
                        success: (data) => {
                            if (data == 1) {
                                $('#delete').closest("tr").fadeOut();
                                alert('deleted successfully');
                            }
                            else {
                                alert('Not deleted');
                            }
                        }

                    });
                }

            });

            // select state and country and city
            $('#country').change(function () {
                var a = $(this).val();
                // var b = $('#state').val();
                // $('#d').html(a);
                if (a == 'India') {
                    $('#state').html(`
        <option value="" selected disabled >Select state</option>
        <option value="Punjab">Punjab</option>
        <option value="Assam">Assam</option>
        `);
                }
                else {

                }
                if (a == 'Australia') {
                    $('#state').html(`
        <option value="" selected disabled >Select state</option>
        <option value="ACT">Australian Capital Territory</option>
        <option value="NSW">New South Wales</option>
        `);
                }
                else {

                }

            }
            );

            $('#state').change(function () {
                var b = $(this).val();
                // $('#d').html(b);
                if (b == 'Punjab') {
                    $('#city').html(`
        <option value="" selected disabled >Select City</option>
        <option value="Ludhiana">Ludhiana</option>
        <option value="Jalandhar">Jalandhar</option>
        <option value="Amritsar">Amritsar</option>
        <option value="Ajitgarh">Ajitgarh</option>
        `);
                }
                else {
                    // $('#d').html('state not found');
                }
                if (b == 'Assam') {
                    $('#city').html(`
        <option value="" selected disabled >Select City</option>
        <option value="Abhayapuri">Abhayapuri</option>
        <option value="Amguri">Amguri</option>
        <option value="Badarpur">Badarpur</option>
        <option value="Baksa">Baksa</option>
        <option value="Barpathar">Barpathar</option>
        <option value="Barpeta">Barpeta</option>
        `);
                }
                else {

                }
                if (b == 'ACT') {
                    $('#city').html(`
        <option value="Select City" selected disabled>Select City</option>
        <option value="Ainslie">Ainslie</option>
        <option value="Amaroo">Amaroo</option>
        <option value="Aranda">Aranda</option>
        <option value="Banks">Banks</option>
        <option value="Barton">Barton</option>
        <option value="Belconnen">Belconnen</option>
        `);
                }
                else {

                }
                if (b == 'NSW') {
                    $('#city').html(`
        <option value="Select City" selected disabled>Select City</option>
        <option value="Abbotsbury">Abbotsbury</option>
        <option value="Abbotsford">Abbotsford</option>
        <option value="Abercrombie">Abercrombie</option>
        <option value="Aberdare">Aberdare</option>
        <option value="Aberdeen">Aberdeen</option>
        `);
                }
                else {

                }
            }
        );

        // password and conform_password
        // $("#confirm_pass").on('keyup', function() {
        //     var password = $("#pass").val();
        //     var confirmPassword = $("#confirm_pass").val();
        //     if (password != confirmPassword)
        //       $("#msg_one , #msg").html("Password does not match !").css("color", "red");
        //     else
        //       $("#msg_one, #msg ").html("Password match !").css("color", "green");
        //   });

            // password conditions
            $('#pass').focus(
                function()
                {
                    $('#conditions').slideDown();
                    // let ar = array[];
                    // array = [
                    var students = ['dfd','jhd'];
                    var arr = students;
                    // $.each(students , function(index , value)
                    // {
                        console.log(arr);
                    // }
                    // );
                    // ];
                    // }
                }
            );
            const newLocal = '#pass';
            // blur input
            $(newLocal).blur(
                function()
                {
                    $('#conditions').slideUp();
                }
            );
            // validations
            $('#pass').keyup(
                function()
                {
                    var pass = $(this).val();
                    // small character
                    if(pass.match(/[a-z]/g))
                    {
                        $('#lc').html('✅ lower character').css('list-style' , 'none');
                    }
                    else
                    {
                        $('#lc').html('❌ lower character').css('list-style' , 'none');
                    }
                    // large character
                    if(pass.match(/[A-Z]/g))
                    {   
                        $('#cc').html('✅ capital character').css('list-style' , 'none');
                    }
                    else
                    {
                        $('#cc').html('❌ capital character').css('list-style' , 'none');
                    }
                    // number
                    if(pass.match(/[0-9]/g))
                    {
                        $('#num').html('✅ number').css('list-style' , 'none');
                    }
                    else
                    {
                        $('#num').html('❌ number').css('list-style' , 'none');  
                    }
                    // special character
                    if(pass.match(/[!@#$%^&*<?:"']/g))
                    {
                        $('#sc').html('✅ special character').css('list-style' , 'none');
                    }
                    else
                    {
                        $('#sc').html('❌ special character').css('list-style' , 'none');
                    }
                    // atleast 8 character
                    if(pass.length == 8 || pass.length >8)
                    {
                        $('#atleast').html('✅ atleat 8 characters').css('list-style' , 'none');
                        // $('#save').prop('type' , 'submit');
                    }
                    else
                    {
                        $('#atleast').html('❌ atleat 8 characters').css('list-style' , 'none');
                        // $('#save').prop('type' , 'hidden');
                    }
                }
            );
                

        let conf = $('#confirm_pass');
        let pass = $('#pass');
        // var num = $('#number').val();

        conf.on(
            {
                'keyup' : () =>
                {
                    var pass_data = pass.val();
                    var confirm_data = conf.val();
                    // var num = $('#number').val();
                    if(pass_data == confirm_data)
                    {
                        // $('#msg_one , #pass_msg').html('Password match !').css('color' , 'green');
                        $('#msg_one , #pass_msg').html('Password match !').css('color' , 'green');
                        $('#save').prop('type' , 'submit');
                    }
                    else
                    {
                       
                        $('#msg_one , #pass_msg').html('Password not  match !').css('color' , 'red');

                        $('#save').prop('type' , 'hidden');
                    
                    }
                }
            }
        );
        // number validations
        
       $('#number').keyup(
        function()
        {
            var num = $('#number').val();
            if(num.length == 10)
            {
                $('#number').prop('type' , 'number');
                $('#con').html('You entered 10 digit number already').css('color' , 'green');
            }
            else if(num.length < 10)
            {
                $('#con').html('Please enter valid 10 digit number').css('color' , 'red');
            }
            else
            {
                if(num.length > 10)
                {
                    $('#number').prop('type' , 'hidden');
                    $('#con').html('Please enter valid 10 digit number').css('color' , 'red');
                    $('#ok').prop('type' ,'button');
                    $('#ok').click(
                        () => {
                        $('#number').prop('type', 'number');
                        $('#ok').prop('type', 'hidden');
                    }
                        );
                }
            }

    //         $('#ok').click(
    //             function()
    //             {
    //                 var num = $('#number').val();
    //                 if(num.length == 10)
    //                 {
    //                     $('#number').prop('type' , 'number');
    //                     $('#con').html('You entered 10 digit number already').css('color' , 'red');
    //                 }
    //                 else
    //                 {
    //                     if(num.length > 10)
    //                     {
    //                     $('#number').prop('type' , 'hidden');
    //                     $('#ok').prop('type' ,'button');
    //                     }
    //                 }
    //             }
    //         );
            
        }
       );

    
    
        










        }
    );