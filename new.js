$(document).ready(
    function () {
        //    $("p:gt(1)").css("background-color" , "yellow");
        $("#start").css("color", "red");
        //    single click 
        $('#start').click(function () {
            $('#start').css("background-color", "cyan");
            var a = $('#start1').html('Change on clicking');
            // $('p:gt(2)').css("border","2px solid green");
            // $('p:lt(2)').css("border","2px solid green");
        }
        );
        //    double click
        $('#start').dblclick(function () {
            $('#start').css('background-color', 'burlywood');
        }
        );
        // right click
        $('#start').contextmenu(function () {
            $('#start').css("background-color", "black");
            $('#start1').css("color", "white");

        }
        );
        // mouseenter event
        $('#start').mouseenter(function () {
            $('#start').css('background-color', 'orange');
            $('#start1').css('color', 'black');
        }
        );
        // onmouseout event
        $("#start").mouseleave(function () {
            $('#start').css('background-color', 'tan');
            $('#start1').css('color', 'black');
        }
        );
        // keypress event
        $('body').keypress(
            function () {
                $(this).css('background-color', '#fcd2f5');
                $('#press').html('typing...');
            }
        );
        // keyup event
        $('body').keyup(
            function () {
                $(this).css('background-color', '#d1ffdd');
                $('#press').html('active');
            }
        );
        // form events focus
        $('#name , #number , #choice ').focus(function () {
            $(this).css("background-color", "#d2f9fa");
        }
        );
        // blur event
        $('#name , #number , #choice ').blur(function () {
            $(this).css("background-color", "white");
        }
        );
        // change event works mostly with select tag
        $('#choice').change(function () {
            $(this).css('background-color', '#fcf7e3');
            var a = $(this).val();
            $('#data').html(a);
        }
        );
        // select event working only with input tag
        $('#name , #number').select(function () {
            $(this).css('background-color', '#ecc0fa');
        }
        );
        // submit event of form
        $('#form').submit(function () {
            $(this).css('background-color', '#ecc0fa');
            alert('Form submitted');
        }
        );
        // window event scroll
        $('#paragraph').scroll(
            function () {
                console.log("You are scrolling");
            }
        );
        // resive event
        $(window).resize(
            function () {
                console.log('You are resizing');
            }
        );
        // get methods
        // var a = $('#paragraph').text();
        // console.log(a);
        // attribute method
        var b = $('#data').attr('class');
        console.log(b);
        // get value 
        $('#form').submit(function () {
            var name = $('#name').val();
            var number = $('#number').val();
            var choice = $('#choice').val();
            alert('Hello' + '\n' + 'name :- ' + name + '\n' + 'number :- ' + number + '\n' + 'choice :- ' + choice);
        }
        );
        // addClass function
        $('#add').click(function () {
            $('#paragraph').addClass('container');
        });
        // removeClass
        $('#remove').click(function () {
            $('#paragraph').removeClass('container');
        });
        // toggleClass
        $('#toggle').click(function () {
            $('#paragraph').toggleClass('container');
        });

        // eye moving
        $('.left').mouseenter(function () {
            $('#left').attr('src', 'left_eye.png');
        }
        );
        $('.container1').mouseenter(function () {
            $('#left').attr('src', 'right_eye.png');
        }
        );
        $('#img').mouseleave(function () {
            $('#left').attr('src', 'close_eye.png');
        }
        );
        // css methods
        $('#style').click(function () {
            $('#paragraph').css({
                "background": "burlywood",
                "font-style": "italic"
            });
        }
        );
        // on method
        let x = $('#paragraph');
        x.on('click', function () {
            $(this).css('background', 'skyblue');
        }
        );
        x.on('mouseover mouseout', function () {
            $(this).toggleClass('container');
        }
        );
        x.on({
            'click': function () {
                x.css(
                    {
                        'background': 'pink',
                        'border-radius': '25px'
                    }
                );
            },
            'mouseenter': function () {
                $(this).css(
                    {
                        'font-weight': 'bold'
                    }
                );
            },
            'mouseleave': function () {
                $(this).css({
                    'color': 'brown'
                });
            }
        });
        // off method
        $('#off').click(function () {
            x.off('mouseenter  mouseleave click mouseover mouseout');
        }
        );
        // append and prepend method
        $('#prepend').click(
            function () {
                x.prepend('<h2>Pragraph</h2>');
            }
        );
        $('#append').click(
            function () {
                x.append('<h2>Pragraph</h2>');
            }
        );
        // empty and remove method
        $('#empty').click(function () {
            x.empty();
        });

        $('#r').click(function () {
            x.remove();
        });
        // after and before method
        $('#after').click(function () {
            x.after('<h2>AFTER</h2>');
        }
        );

        $('#before').click(function () {
            x.before('<h2>BEFORE</h2>');
        }
        );
        // clone method with appendTo and prependTo method
        $('#clone').click(function () {
            x.clone().prependTo('#copy');
            x.clone().appendTo('#copy');
        }
        );
        // replacewith method
        $('#replacewith').click(function () {
            $('#copy p').replaceWith('<h3>Hello</h3>');
        }
        );
        // replaceAll method
        $('#replaceall').click(function () {
            $('<h3>Replaced </h3>').replaceAll('#copy');
        }
        );
        // wrap method
        $('#wrap').click(function () {
            $('#copy p').wrap('<div class = "btn btn-warning"></div>')
        }
        );
        // unwrap method 
        $('#unwrap').click(function () {
            $('#copy p').unwrap();
        }
        );
        // animate 
        $('#animate').click(
            function () {
                $('#copy').animate({ left: '150px' }, "slow");
                $('#copy').animate({ top: '150px' }, "slow");
                $('#copy').animate({ right: '150px' }, "slow");
            }
        );
        $('#unanimate').click(
            function () {
                $('<h3>active </h3>').replaceAll('#copy');


            }
        );

        // form submission
        let submit = $('#submit');
        submit.click(
            () => {
            var name = $('#name').val();
            var number = $('#number').val();
            var choice = $('#choice').val();
            if (name == '' || number == '' || choice == '') {
                alert('Empty form will not be submitted');
            }
            else {
                $.post(
                    'insert.php',
                    $('#form').serialize(),
                    (data) => {
                        if (data == 1) {
                            alert('Inserted');
                        }
                    }
                );
            }

        }
        );








    }

);
// #170614

// function(data){}
// or 
// (data) => {}
// are same

