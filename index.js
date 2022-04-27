const readline = require('readline');
const credit = '[+] Script Coded By : JustArra\n[+] Script Version     : 0.15\n'
const call = async function(nomor){
var axios = require('axios')
url = "https://id.jagreward.com/member/verify-mobile/"
t = await axios.get(url+nomor)
if(t.data.result == "1") {
console.log("result: success")
} else {  console.log("result: failed")
}}

const rl = readline.createInterface({
  input: process.stdin,
  output: process.stdout
});

async function start(){
console.log(credit)
rl.question('masukan nomor: ', (nomor) => {
    async function p(){
  await call(nomor)
    }
    p()
})}
start()
