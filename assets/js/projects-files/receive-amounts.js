

    $('.source').change(function(){
    var source=$('select[name=source]').val();

        if(source=='admin'){
            $('#clientSection').hide();
            $('#adminSection').show();
        }else{
            $('#adminSection').hide();
            $('#clientSection').show();
        }
 });


 
$('.client_id').change(function(){
    var client_id=$('select[name=client_id]').val();
 
    $.ajax({
 
        type: 'ajax',

        method: 'get',

        url: 'getClientProjects',

        data: {client_id: client_id},

        async: false,

        dataType: 'json',

        success: function(data) {
        
            var html = '';
            var unit='';
                       
            var i;

            for (i = 0; i < data.length; i++) {
              
            html += '<option value="'+data[i].project_id+ '">' + data[i].project_name + '</option>'; 
            unit += '<option value="' + data[i].unit_id+ '">' + data[i].unit_name + '</option>'; 

            }


            $('#showProjects').html(html);
            $('#showUnits').html(unit);
          

        },

        error: function() {

            alert('Could not get Data from Database');

        }

    });

             
 });




  
$('.client_id').change(function(){
    var client_id=$('select[name=client_id]').val();

    $.ajax({
 
        type: 'ajax',

        method: 'get',

        url: 'getClientProjectsAmount',

        data: {client_id: client_id},

        async: false,

        dataType: 'json',

        success: function(data) {
        if(data!=0){
               
            var i;
            for (i = 0; i < data.length; i++) {
       

            $('input[name=dueAmount]').val(data[i].payable);
            $('input[name=hidden_dueAmount]').val(data[i].payable);
            
            }
        }else{
            
            $('input[name=dueAmount]').val(0);
        }

        },

        error: function() {

            alert('Could not get Data from Database');

        }

    });

             
 });



 
$('input[name=down_payment]').change(function(){

    var down_payment=$('input[name=down_payment]').val();
    var dueAmount=$('input[name=dueAmount]').val();
    var hidden_dueAmount=$('input[name=hidden_dueAmount]').val();



    if(down_payment>0 && dueAmount>0){
        var rem_amount=parseFloat(dueAmount) - parseFloat(down_payment);
        $('input[name=dueAmount]').val(rem_amount);

        
    }
    else{
        
        $('input[name=dueAmount]').val(hidden_dueAmount);
    }

});

 