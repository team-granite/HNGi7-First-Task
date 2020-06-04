const internInfo = {
    fullName: "Balogun Lukman",
    hnID: "HNG-01022",
    email: "lukheebalo@gmail.com"
}

const showMyInfo = ({fullName, hnID, email}) => {
    var result = `Hello World, this is ${fullName} with HNGi7 ID ${hnID} using Javascript for stage 2 task and ${email}`
    return (result)
}

console.log(showMyInfo(internInfo));