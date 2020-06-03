
let fullName = 'Nwankwu Tochukwu'
let HNGID = 'HNG-02704'
let language = 'javascript'

let details = {
    fullName,
    HNGID,
    language
}

const outputFunction = ({fullName, HNGID, language}) => {
    console.log('Hello World, this is ' + fullName + ' with HNGi7 ID ' + HNGID + ' using ' + language + ' for stage 2 task')
}

outputFunction(details)
