var x, xmlhttp, xmlDoc, div;
xmlhttp = new XMLHttpRequest();
xmlhttp.open("GET","xml/aksesuar.xml", false);
xmlhttp.send();
xmlDoc = xmlhttp.responseXML;
x = xmlDoc.getElementsByTagName("URUN");
div = "";
for(i=0; i<x.length; i++) {
    div += "<div class='col' >";
        div += "<div class='card h-100 border-dark mb-2'>";
            div += "<img src='" +  x[i].getElementsByTagName("IMAGE")[0].childNodes[0].nodeValue
            + "' class='card-img-top'>";
            div += "<div class='card-body'>";
                div += "<h6 class='card-title'>";
                    div += x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
                div += "</h6>";
                div += "<p class='card-text'>";
                    div += x[i].getElementsByTagName("ACIKLAMA")[0].childNodes[0].nodeValue;
                div += "</p>";
            div += "</div>";
            div += "<div class='card-footer bg-transparent'>";
                div += "<p class='card-text'>";
                     div += x[i].getElementsByTagName("FIYAT")[0].childNodes[0].nodeValue;
                div += "</p>";
                div += "<a href='" +
                            x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue + 
                            "' class='btn btn-outline-dark btn-block'>Satın Al</a>";
            div += "</div>";
        div += "</div>";
    div += "</div>";
}
document.getElementById("urunBolumu").innerHTML = div;
/*
function loadXMLDoc(){
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function(){
        if(this.readyState==4 && this.status==200){
            myfunction(this);
        }
    };
    xmlhttp.open("GET","xml/aksesuar.xml",true);
    xmlhttp.send();
}
function myfunction(xml){
    var i;
    var xmldoc=xml.responseXML;
    var div="";
    for(i=0; i<x.length; i++) {
        div += "<div class='col'>";
            div += "<div class='card h-100 border-info mb-2'>";
                div += "<img src='" +  x[i].getElementsByTagName("IMAGE")[0].childNodes[0].nodeValue
                + "' class='card-img-top'>";
                div += "<div class='card-body'>";
                    div += "<h6 class='card-title'>";
                        div += x[i].getElementsByTagName("TITLE")[0].childNodes[0].nodeValue;
                    div += "</h6>";
                    div += "<p class='card-text'>";
                        div += x[i].getElementsByTagName("ACIKLAMA")[0].childNodes[0].nodeValue;
                    div += "</p>";
                div += "</div>";
                div += "<div class='card-footer bg-transparent'>";
                    div += "<p class='card-text'>";
                         div += x[i].getElementsByTagName("FIYAT")[0].childNodes[0].nodeValue;
                    div += "</p>";
                    div += "<a href='./urunSayfa/aracgerecSayfa/" +
                                x[i].getElementsByTagName("LINK")[0].childNodes[0].nodeValue + 
                                "' class='btn btn-outline-primary btn-block'>Satın Al</a>";
                div += "</div>";
            div += "</div>";
        div += "</div>";
    }
    document.getElementById("urunBolumu").innerHTML=div;
}
*/