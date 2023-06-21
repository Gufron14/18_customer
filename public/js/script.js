//Register
function login(){
    const request = new XMLHttpRequest();
    request.open("POST", env('url') + "/user/login");
    
    request.send();
    request.onload = ()=>{
        if (request.status === 200){
            var data = JSON.parse(request.response);
            data.provinsi.forEach((item) => {
                let o = document.createElement('option');
                o.text = item.province;
                o.value = item.id;
                province.appendChild(o);
            });

            console.log(request.status + request.statusText);
        } else {
            console.log(request.status);
        }
    }
}

//menampilkan daftar provinsi
const request = new XMLHttpRequest();
request.open("GET", env('url') + "provinsi");
request.send();
request.onload = ()=>{
    if (request.status === 200){
        var data = JSON.parse(request.response);
        data.provinsi.forEach((item) => {
            let o = document.createElement('option');
            o.text = item.province;
            o.value = item.id;
            province.appendChild(o);
        });
        
        console.log(request.status + request.statusText);
    } else {
        console.log(request.status);
    }
}

//menampilkan daftar kota
function getCity() {
    document.getElementById('city').innerHTML = "";
    document.getElementById('district').innerHTML = "";
    document.getElementById('village').innerHTML = "";
    const request = new XMLHttpRequest();
    request.open("GET", env('url') + "kota/" + document.getElementById('province').value);
    request.onload = ()=>{
        if (request.status === 200){
            data = JSON.parse(request.response);
            data.kota.forEach((item) => {
                let o = document.createElement('option');
                o.text = item.city;
                o.value = item.id;
                city.appendChild(o);
            });
            console.log(request.status + request.statusText);
        } else {
            console.log(request.status);
        }
    }
    request.send();
}

//menampilkan daftar kecamatan
function getDistrict() {
    document.getElementById('district').innerHTML = "";
    document.getElementById('village').innerHTML = "";
    const request = new XMLHttpRequest();
    request.open("GET", env('url') + "kecamatan/" + document.getElementById('city').value);
    request.onload = ()=>{
        if (request.status === 200){
            data = JSON.parse(request.response);
            data.kecamatan.forEach((item) => {
                let o = document.createElement('option');
                o.text = item.district;
                o.value = item.id;
                district.appendChild(o);
            });
            console.log(request.status + request.statusText);
        } else {
            console.log(request.status);
        }
    }
    request.send();
}

//menampilkan daftar kecamatan
function getVillage() {
    document.getElementById('village').innerHTML = "";
    const request = new XMLHttpRequest();
    request.open("GET", env('url') + "kelurahan/" + document.getElementById('district').value);
    request.onload = ()=>{
        if (request.status === 200){
            data = JSON.parse(request.response);
            data.kelurahan.forEach((item) => {
                let o = document.createElement('option');
                o.text = item.village;
                o.value = item.id;
                village.appendChild(o);
            });
            console.log(request.status + request.statusText);
        } else {
            console.log(request.status);
        }
    }
    request.send();
}


    
