class Details {
        constructor(firstName, lastName, id, language){
                this.firstName = firstName;
                this.lastName = lastName;
                this.id = id;
                this.language = language;
        }
        
    getDetails(){
        return `Hello World, this is ${this.lastName} ${this.firstName} with HNGi7 ID ${this.id} using ${this.language} for stage 2 task `;
    }
}

const urchylisDetails = new Details('Uchenna', 'Uzor', 'HNG-06337', 'JavaScript');
console.log(urchylisDetails.getDetails());