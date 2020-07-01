(function(win,doc){
    'use strict';

    //Delete Automóvel
    function confirmDelAut(event)
    {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo apagar?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="automobiles";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }
    // DELETE FIUNCIONÁRIO
    function confirmDelFun(event)
    {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo apagar?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="users";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }
    // DELETE FILIAL
    function confirmDelFil(event)
    {
        event.preventDefault();
        //console.log(event.target.parentNode.href);
        let token=doc.getElementsByName("_token")[0].value;
        if(confirm("Deseja mesmo apagar?")){
            let ajax=new XMLHttpRequest();
            ajax.open("DELETE",event.target.parentNode.href);
            ajax.setRequestHeader('X-CSRF-TOKEN',token);
            ajax.onreadystatechange=function(){
                if(ajax.readyState === 4 && ajax.status === 200){
                    win.location.href="branches";
                }
            };
            ajax.send();
        }else{
            return false;
        }
    }
    // AUTOMÓVEL
    if(doc.querySelector('.js-del-aut')){
        let btn=doc.querySelectorAll('.js-del-aut');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDelAut,false);
        }
    }
    // FUNCIONÁRIO
    if(doc.querySelector('.js-del-fun')){
        let btn=doc.querySelectorAll('.js-del-fun');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDelFun,false);
        }
    }
    //FILIAIS
    if(doc.querySelector('.js-del')){
        let btn=doc.querySelectorAll('.js-del');
        for(let i=0; i < btn.length; i++){
            btn[i].addEventListener('click',confirmDelFil,false);
        }
    }
})(window,document);
