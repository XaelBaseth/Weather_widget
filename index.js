$.ajax({
    type: 'POST',
    dataType: "json",
    url:'widget.php',
    data:
    success: function(data)
    {
     try {
        data = JSON.parse(data);
      }catch(e) {}
      console.log(data);
    }
  });