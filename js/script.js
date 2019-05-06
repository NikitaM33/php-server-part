function post_query( url, name, data ){
    var str = '';

    $.each( data.split('.'), function( k, v ){
        alert(v);
        // str += '&' + v + '=' + $( '#' + v ).val();
    } );

    // $.ajax({
    //     url: '/' + url,
    //     type: 'POST',
    //     data: name + '_f=1' + str,
    //     cache: false,
    //     success: function( result ) {
    //         var obj = jQuery.parseJSON( result );
            
    //         if ( obj.go ) {
    //             goTo(obj.go);
    //         } else {alert( obj.message )};
            
    //     }
    // });
};

// function goTo( url ) {
//     window.location.href = '/' + url;
// }