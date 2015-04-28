function getElementLeft(elm) 
{
    var x = 0;

    x = elm.offsetLeft;

    elm = elm.offsetParent ;

    while(elm != null)
    {
        x = parseInt(x) + parseInt(elm.offsetLeft);
        elm = elm.offsetParent;
    }
    return x;
}

function getElementTop(elm) 
{
    var y = 0;
    y = elm.offsetTop;
    elm = elm.offsetParent;

    while(elm != null)
    {
        y = parseInt(y) + parseInt(elm.offsetTop);
        elm = elm.offsetParent;
    }

    return y;
}

function Large(obj)
{
    var imgbox=document.getElementById("imgbox");
    imgbox.style.visibility='visible';
    var img = document.createElement("img");
    img.src=obj.src;
    img.style.width='250px';
    img.style.height='250px';
    
    if(img.addEventListener){
        img.addEventListener('mouseout',Out,false);
    } else {
        img.attachEvent('onmouseout',Out);
    }             
    imgbox.innerHTML='';
    imgbox.appendChild(img);
    imgbox.style.left=(getElementLeft(obj)-5) +'px';
    imgbox.style.top=(getElementTop(obj)-100) + 'px';
}

function Out()
{
    document.getElementById("imgbox").style.visibility='hidden';
}