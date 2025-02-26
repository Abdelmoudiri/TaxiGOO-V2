const accountTypes = document.querySelectorAll('input[name = "account_type"]');

for(const accountType of accountTypes ){
    accountType.addEventListener('change',()=>{
        if(accountType.value == "driver"){
            document.getElementById('lisence').classList.remove('hidden');
        }
        else document.getElementById('lisence').classList.add('hidden');
    })
}
