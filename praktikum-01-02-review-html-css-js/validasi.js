function validasi()
{
    let txtKataKunci = document.getElementById("txtKataKunci");
    if (txtKataKunci.value == "") 
    {
        alert("Anda harus mengisi textbox dengan sembarang kata");
    }
    else
    {
    alert("anda ingin mencari dengan kata kunci =" +txtKataKunci.value);
    }
}