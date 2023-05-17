const searchButton = document.getElementsByClassName("search-button")[0];
const closeButton = document.getElementsByClassName("search-button")[1];
closeButton.style.zIndex = "0";
searchButton.style.zIndex = "1";
const searchForm = document.getElementsByClassName("search-form")[0];
const searchInput = document.getElementsByClassName("search-input")[0];
const accountButton = document.getElementById("account-button");
const loginPopup = document.getElementsByClassName("login-popup")[0];

searchButton.addEventListener("click", function () {
    closeButton.style.zIndex = "1";
    searchButton.style.zIndex = "0";
    closeButton.style.backgroundColor = "black";
    closeButton.style.color = "white";
    searchForm.style.width = "300px";
    searchInput.style.display = "block";
})

closeButton.addEventListener("click", function () {
    closeButton.style.zIndex = "0";
    searchButton.style.zIndex = "1";
    closeButton.style.backgroundColor = "white";
    searchButton.style.backgroundColor = "white";
    searchButton.style.color = "black";
    searchForm.style.width = "50px";
    searchInput.style.display = "none";
})

let opened = false;
accountButton.addEventListener("click", function () {
    if (opened) {
        loginPopup.style.display = "none";
    } else {
        loginPopup.style.display = "flex";
    }
    opened = !opened;
})