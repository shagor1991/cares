function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function goBlank(objName,x) { 
//v3.0
  var obj = MM_findObj(objName); 
   //alert(obj);
if (document.layers) {
    return;
} else {
    if (obj.value == "Search this site" || obj.value == "Search DevNet" || obj.value == "Search giving.unc.edu" ) {
    obj.value = "";
    }
 return;
}
}
