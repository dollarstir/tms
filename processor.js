
$(function(){

    function resp(response){

        if(response == "success"){
            swal.close();
            swal({
                title: "Good job!",
                text: "Record added successfully!",
                type: "success",
                padding: "2em",
              }).then(function(){
                  window.location.reload();
              });
        }
        else if(response == 'deleted'){

            swal({
                title: "Done!",
                text: "Record deleted successfully!",
                type: "success",
                padding: "2em",
              }).then(function(){
                  window.location.reload();
              });

        }


    }

    function before()
{
    
    Swal.fire({
        title: 'Please Wait !',
        html: 'request in progress...',// add html attribute if you want or remove
        allowOutsideClick: false,
        onBeforeOpen: () => {
            Swal.showLoading()
        },
    });
}
$('.addvisitor').submit(function(e){

        e.preventDefault();
        // before();
        var visitors = {
            url: 'processor.php?action=addvisitor',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp

        };
        $.ajax(visitors);
});


$('.addcustomer').submit(function(e){

        e.preventDefault();
        // before();
        var customers = {
            url: 'processor.php?action=addcustomer',
            type: 'post',
            data: new FormData(this),
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: before,
            success: resp

        };
        $.ajax(customers);
});



$('.adbooking').submit(function(e){

    e.preventDefault();
    // before();
    var bookings = {
        url: 'processor.php?action=addbookings',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(bookings);
});

$('.eventex').submit(function(e){

    e.preventDefault();
    // before();
    var eventx = {
        url: 'processor.php?action=addexcuted',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(eventx);
});

$('.eventeb').submit(function(e){

    e.preventDefault();
    // before();
    var eventb = {
        url: 'processor.php?action=eventbook',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(eventb);
});


$('.addstaff').submit(function(e){

    e.preventDefault();
    // before();
    var staff = {
        url: 'processor.php?action=addstaff',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(staff);
});

$('.addsession').submit(function(e){

    e.preventDefault();
    // before();
    var session = {
        url: 'processor.php?action=addsession',
        type: 'post',
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});

$('.delsession').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=sessions&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delsession').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.delvisitor').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=visitors&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delvisitor').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.delbookinfo').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=bookings&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delbookinfo').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});


$('.delevntx').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=eventx&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delevntx').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});




$('.delevntb').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=eventb&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delevntb').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});



$('.delcustomer').click(function(e){

    e.preventDefault();
    var id = this.id;
    var sid = this.id;
    // alert(id);
    // before();
    var session = {
        url: 'processor.php?action=delete&table=customers&sid='+ sid,
        type: 'post',
        data: jQuery.param({ sid : $('.delcustomer').attr('id') }),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: before,
        success: resp

    };
    $.ajax(session);
});
    
})