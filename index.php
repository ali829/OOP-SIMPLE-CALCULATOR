<?php
// types strict allow to spicify the data type of a varriable or function to ensure that the data type that we passed is the expected one
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./dist/output.css" rel="stylesheet">
    <link rel="stylesheet" href="node_modules/sweetalert2/dist/sweetalert2.min.css">
    <title>Document</title>

    <style>

    </style>
</head>

<body class="flex justify-center items-center bg-gradient-to-r from-[#140D2B] to-[#291661] h-screen">
    <div class="bg-white/20 backdrop-blur-md w-2/3 h-max py-12 px-7 rounded-md shadow-lg">
        <form id="calc_form" class="w-full h-full flex justify-between items-center">
            <div>
                <input type="number" name="fnum1" id="">
            </div>
            <div>
                <select name="operator" id="">
                    <option value="+" selected>+</option>
                    <option value="-">-</option>
                    <option value="/">/</option>
                    <option value="*">*</option>
                </select>
            </div>
            <div>
                <input type="number" name="fnum2" id="">
            </div>
            <div>
                <input type="submit" value="Calculate">
            </div>
        </form>
    </div>
</body>
<script src="node_modules/sweetalert2/dist/sweetalert2.all.min.js"></script>
<script>
    //? fetch data from calculator 

    document.getElementById('calc_form').addEventListener('submit', (e) => {
        e.preventDefault();
        const formData = new FormData(document.getElementById('calc_form'));
        getData('includes/calculator.inc.php', formData);
    })


    const getData = (url, formData) => {
        fetch(url, {
            method: 'POST',
            body: formData
        })
            .then(res => res.text())
            .then(text => {
                console.log(text)
                Swal.fire({
                    icon: 'info',
                    title: `The result Is : ${text}`,
                    showConfirmButton: false,
                })
            })
            .catch(e => console.log(e))
    }
</script>

</html>