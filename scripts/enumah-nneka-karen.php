<script>

let url_params_string = window.location.search;

if (url_params_string === "?json"){

output_my_details_as_json("ENUMAH NNEKA KAREN", "220202029920");

}else{

    output_my_details("ENUMAH NNEKA KAREN", "220202029920");
   
}


function output_my_details(name,id) {

document.write(`<div>Hello World, this is ${name} with HNGi7 ID ${id} using JAVASCRIPT </div> `);
 
}

function output_my_details_as_json(name,id){

let json_output = {message: `Hello World, this is ${name} with HNGi7 ID ${id} using JAVASCRIPT` }
   
    document.write(JSON.stringify( json_output ) );
   
}

</script>