import axios from 'axios';
let data = {};
    axios
        .get('http://172.23.18.177:8000/applications')
        .then((response) => {
            data = response;
            console.log(response)
        })
