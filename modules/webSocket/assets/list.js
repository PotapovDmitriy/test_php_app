console.log("I'm fine");

var ws = new WebSocket("ws://localhost:1337/broadcast");
var list = document.getElementById("messages");
var input = document.querySelector('input[name=message]');

ws.addEventListener("message", function (e) {
    console.log(e.data);
    let json = JSON.parse(e.data);
    let listItem = document.createElement('li');

    listItem.className = 'delayed';
    listItem.textContent = json["data"];


    list.append(listItem);

    while (list.children.length > 5) {
        list.removeChild(list.firstChild);
    }
});

input.addEventListener('keyup', function (e) {
    if (e.keyCode === 13) {

        e.preventDefault();
        if (e.target.value.length > 0) {
            let json = '{"action":"put", "message":"' + e.target.value + '"}';
            ws.send(json);
            e.target.value = "";
            e.target.focus();
        } else {
            alert("Поле не должно быть пустым")
        }

    }
});