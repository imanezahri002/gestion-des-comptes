let inputBA=document.getElementById("businessAccount");
let inputCA=document.getElementById("currentAccount");
let inputSA=document.getElementById("savingAccount");
let select=document.getElementById("typeCompte");

inputBA.style.display = "none";
inputCA.style.display = "none";
inputSA.style.display = "none";
select.addEventListener("change", (event) => {
    if (select.value == "savingAcc") {
        inputBA.style.display = "none";
        inputCA.style.display = "none";
        inputSA.style.display = "block";
    };
    if (select.value == "currentAcc") {
        inputBA.style.display = "none";
        inputCA.style.display = "block";
        inputSA.style.display = "none";
    }
    if (select.value=="businessAcc") {
        inputBA.style.display = "block";
        inputCA.style.display = "none";
        inputSA.style.display = "none";
    }
});
