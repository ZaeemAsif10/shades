

$('.project-id').change(function(){
   var project_id=$('select[name=project_id]').val();
 
                $.ajax({

                type: 'ajax',

                method: 'get',

                url: 'getStoryForDropDown',

                data: {project_id: project_id},

                async: false,

                dataType: 'json',

                success: function(data) {

                    var html = '<option value="">Choose Story</option>';
                               
                    var i;

                    for (i = 0; i < data.length; i++) {

                    html += '<option value="'+data[i].id+'">' + data[i].floor + '</option>'; 

                    }


                    $('#showStories').html(html);

                },

                error: function() {

                    alert('Could not get Data from Database');

                }

            });
})





$('.stories_id').change(function(){
   var story_id=$('select[name=story_id]').val();

                $.ajax({

                type: 'ajax',

                method: 'get',

                url: 'getUnitsForDropDown',

                data: {story_id: story_id},

                async: false,

                dataType: 'json',

                success: function(data) {

                    var html = '<option value="">Choose Unit</option>';
                               
                    var i;

                    for (i = 0; i < data.length; i++) {
                       
                    html += '<option value="'+data[i].id+'">' + data[i].unit_title + '</option>'; 

                    }


                    $('#showUnits').html(html);
                  

                },

                error: function() {

                    alert('Could not get Data from Database');

                }

            });
})



$('input[name=down_payment]').keyup(function(){

    var down_payment=$('input[name=down_payment]').val();
    var unit_worth=$('input[name=unit_worth]').val();

    if(down_payment>0 && unit_worth>0){
        var rem_amount=parseFloat(unit_worth) - parseFloat(down_payment);
        $('input[name=rem_amount]').val(rem_amount);

        
    }
    else{
        
        $('input[name=rem_amount]').val(unit_worth);
    }

});



$('.unit_id').change(function(){
    var unit_id=$('select[name=unit_id]').val();

                 $.ajax({
 
                 type: 'ajax',
 
                 method: 'get',
 
                 url: 'getUnitsAmountForDropDown',
 
                 data: {unit_id: unit_id},
 
                 async: false,
 
                 dataType: 'json',
 
                 success: function(data) {
 
                                
                     var i;
 
                     for (i = 0; i < data.length; i++) {
                         $('input[name=unit_worth]').val(data[i].unit_worth);
              
 
                     }
 
 
                   
 
                 },
 
                 error: function() {
 
                     alert('Could not get Data from Database');
 
                 }
 
             });
 })
 