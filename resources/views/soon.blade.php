<!DOCTYPE html>
<html lang="en">
<head>
    <title>Coming Soon 13</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    {{Html::style('comingsoon/vendor/bootstrap/css/bootstrap.min.css') }}
    {{Html::style('comingsoon/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}

    {{Html::style('comingsoon/css/util.css') }}
    {{Html::style('comingsoon/css/main.css') }}

</head>
<body>

<!--  -->
<div class="simpleslide100">
    <div class="simpleslide100-item bg-img1" style="background-image: url('{{url('comingsoon/images/bg01.jpg')}}');"></div>
    <div class="simpleslide100-item bg-img1" style="background-image: url('{{url('comingsoon/images/bg02.jpg')}}');"></div>
    <div class="simpleslide100-item bg-img1" style="background-image: url('{{url('comingsoon/images/bg03.jpg')}}');"></div>
    <div class="simpleslide100-item bg-img1" style="background-image: url('{{url('comingsoon/images/bg04.jpg')}}');"></div>
</div>

<div class="flex-col-c-sb size1 overlay1 p-l-75 p-r-75 p-t-20 p-b-40 p-lr-15-sm">
    <!--  -->
    <div class="w-full flex-w flex-sb-m">
        <div class="wrappic1 m-r-30 m-t-10 m-b-10">
            <a href="#"><img src="{{Storage::url(sett()->logo)}}" alt="LOGO"></a>
        </div>


    </div>

    <!--  -->
    <div class="flex-col-c-m p-l-15 p-r-15 p-t-80 p-b-90">
        <h3 class="l1-txt2 txt-center p-b-55 respon1">
            Coming Soon
        </h3>

        <div>
            <h3 class="m1-txt1 txt-center p-b-55 respon1">
                {{sett()->message_mentenance}}
            </h3>
        </div>
    </div>

    <div class="flex-sb-m flex-w w-full">
        <!--  -->
        <div class="flex-w flex-c-m m-t-10 m-b-10">
            <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
                <i class="fa fa-facebook"></i>
            </a>

            <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
                <i class="fa fa-twitter"></i>
            </a>

            <a href="#" class="size3 flex-c-m how-social trans-04 m-r-3 m-l-3 m-b-3 m-t-3">
                <i class="fa fa-youtube-play"></i>
            </a>
        </div>

    </div>
</div>

{{Html::script('comingsoon/vendor/jquery/jquery-3.2.1.min.js')}}
{{Html::script('comingsoon/vendor/bootstrap/js/bootstrap.min.js')}}


<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 0,
        endtimeMonth: 0,
        endtimeDate: 35,
        endtimeHours: 19,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: ""
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
<!--===============================================================================================-->
<script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
{{Html::script('comingsoon/js/main.js')}}

</body>
</html>