$('#facultad').on('change',function(e){
    // console.log(e);

    var facultad_id= e.target.value;
    $.get('/ajax-escucat?facultad_id='+facultad_id,function(data){

        var escuela= $('#escuela');

        escuela.empty();
        $.each(data,function(index,escuObj){
            //  console.log(data);
            escuela.append('<option value="'+escuObj.id +'">'+escuObj.nombre +'</option>'


            );
        })

    })
});

$('#facultad').on('change',function(e){
    // console.log(e);

    var facultad_id= e.target.value;
    $.get('/ajax-escucat?facultad_id='+facultad_id,function(data){

        var escuela= $('#escuela');

        escuela.empty();
        $.each(data,function(index,escuObj){
            //  console.log(data);
            escuela.append('<option value="'+escuObj.id +'">'+escuObj.nombre +'</option>'


            );
        })

    })
});



