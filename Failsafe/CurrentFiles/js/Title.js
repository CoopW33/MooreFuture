setup : function(ed){
    ed.addButton('formath1', // name to add to toolbar button list
    {
        title : 'Make h1', // tooltip text seen on mouseover
        image : 'http://myserver/ma_button_image.png',
        onclick : function()
        {
        ed.execCommand('FormatBlock', false, 'h1');
        }
    });
},