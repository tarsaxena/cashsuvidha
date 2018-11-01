<?php include 'header.php'; ?>
<?php include 'config/configure.php'; ?>


<!-- STAR Awesome -->


<style>
    *, *:before, *:after {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    }

    body {
        font-family: 'Nunito', sans-serif;
        color: #384047;
    }

    form {
        max-width: 300px;
        margin: 10px auto;
        padding: 10px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }

    #xx{
        max-width: 1000px;
        margin: 15px auto;
        padding: 40px 20px;
        background: #f4f7f8;
        border-radius: 8px;
    }


    h1 {
        margin: 0 0 30px 0;
        text-align: center;
    }

    input[type="text"],
    input[type="password"],
    input[type="date"],
    input[type="datetime"],
    input[type="email"],
    input[type="number"],
    input[type="search"],
    input[type="tel"],
    input[type="time"],
    input[type="url"],
    textarea,
    select {
        background: rgba(255,255,255,0.1);
        border: none;
        font-size: 16px;
        height: auto;
        margin: 0;
        outline: 0;
        padding: 10px;
        width: 100%;
        background-color: #e8eeef;
        color: #8a97a0;
        box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
        margin-bottom: 30px;
    }

    input[type="radio"],
    input[type="checkbox"] {
        margin: 0 4px 8px 0;
    }

    select {
        padding: 6px;
        height: 32px;
        border-radius: 2px;
    }

    #user_review {
        padding: 19px 39px 18px 39px;
        color: #FFF;
        background-color: #002e5b;
        font-size: 18px;
        text-align: center;
        font-style: normal;
        border-radius: 5px;
        width: 100%;
        border: 1px solid #002e5b;
        border-width: 1px 1px 3px;
        box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
        margin-bottom: 10px;
    }

    fieldset {
        margin-bottom: 30px;
        border: none;
    }

    legend {
        font-size: 1.4em;
        margin-bottom: 10px;
    }

    label {
        display: block;
        margin-bottom: 8px;
    }

    label.light {
        font-weight: 300;
        display: inline;
    }


    @media screen and (min-width: 480px) {

        form {
            max-width: 480px;
        }

        ss {
            max-width: 480px;
        }

    }
</style>



<!-- header start -->
<?php include 'top.php'; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $(document).ready(function () {
        //$('#memberModal').modal('show');
        $("#user_review").click(function ()
        {
            var name = $("#name");
            if (name.val() == "") {
                // $( "#msg").text( "Please Enter Name" );
                //$("#msg").show();
                //return false;
                alert("Please Enter Name");
                return false;
            }


            var review = $("#review").val();
            if (review.length <=50) {
                //  $( "#msg").text( "Please Enter Your Review." );
                //$("#msg").show();
                //return false;
                alert("Please Enter Your Review at least 50 Characters.");
                return false;
            }
            
            if (!$('input[name="star"]').is(':checked')) {
                alert("Please Rate Us");
                e.preventDefault();
            }
              
            
            //alert($('#ratingsForm').serialize());
            $.ajax({
                type: "post",
                url: "review_ajax.php",
                dataType: 'text',
                data: $('#ratingsForm').serialize(),

                success: function (data) {
                    $("#show").html(data);
                    $('#name').val('');
                    $('#review').val('');
                    $('#frm').hide();
                    $('#blk').show();
                    setTimeout("location.href = 'https://www.cashsuvidha.com/';", 4000);

                },
                error: function () {
                    alert("Something went wrong");
                }
            });

        });
    });
</script>
<title>User Review Section</title>
<div id="frm">
    <form id="ratingsForm" method="post" enctype="multipart/form-data">
        <div align="center" style="color:red;font-size:18px" id="msg"></div>
        <div align="center" style="color:#009933;font-size:18px" id="show" ></div>
        <fieldset>
            <h4>User Review Section</h4>
            <hr/>

            <label for="name"><b>Name</b></label><input type="text" id="name" name="user_name" class=" btn-default sug-btn" />
            <label for="bio"><b>Please Write Your Review:</b></label>
            <textarea id="review" name="user_review" minlength="50" required></textarea>
            <br/>
            <center>
                <label for="Rate"><b>Rating</b></label>
            </center>
            <div class="stars">
                <input type="radio" name="star" class="star-1" value="1" id="star-1" />
                <label class="star-1"  for="star-1">1</label>
                <input type="radio" name="star" class="star-2"  value="2" id="star-2" />
                <label class="star-2" for="star-2">2</label>
                <input type="radio" name="star" class="star-3" value="3" id="star-3" />
                <label class="star-3" for="star-3">3</label>
                <input type="radio" name="star" class="star-4" value="4" id="star-4" />
                <label class="star-4" for="star-4">4</label>
                <input type="radio" name="star" class="star-5" value="5" id="star-5" />
                <label class="star-5" for="star-5">5</label>
                <span></span></div>
            <br/><br/>
            <input id="user_review"  type="button"  value="Submit" class="btn btn-default sug-btn">
        </fieldset>
    </form>
</div>


<br/><br/>
<div id="blk" style="display:none">
    <br/>
    <center><span align="center" style="color:#f57f26;font-size:38px;font-style:oblique;" id="xx" >Thanks For Submiting Your Review..! </span></center>
    <br/><br/>
</div>


<?php include 'bottom.php'; ?>
<?php include 'footer.php'; ?>

