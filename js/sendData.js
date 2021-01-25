function sendData(id) {     
    $.ajax({
        url:"controller/ajax.php",
        method: "POST",
        data: 'id=' +id,              
      }).done(function (resp) {
        var rs = JSON.parse(resp);
        console.log(rs);
    });
}
