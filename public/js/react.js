$(document).ready(()=>{
    $('.react').on('click', (e) => {
        console.log(e.target.classList.contains('icon'));
        if (e.target.classList.contains('icon')) {
            e.target.classList.remove('icon')
            e.target.classList.add('icon_react')
        }
        else {
            e.target.classList.add('icon')
            e.target.classList.remove('icon_react')
        }

    })
    })
