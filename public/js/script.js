const accountTypes = document.querySelectorAll('input[name = "account_type"]');
const reservationModal = document.getElementById('reservation-modal');
const reserveButtons = document.querySelectorAll('.reserver');

for(const accountType of accountTypes ){
    accountType.addEventListener('change',()=>{
        if(accountType.value == "driver"){
            document.getElementById('lisence').classList.remove('hidden');
        }
        else document.getElementById('lisence').classList.add('hidden');
    })
}


document.getElementById('annuler').addEventListener('click',function(){
    reservationModal.classList.add('hidden');
})

function reserve(driverid){
    reservationModal.classList.remove('hidden');
    document.getElementById('driverid').value = driverid;
}


