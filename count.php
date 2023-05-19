<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <script src="https://unpkg.com/vanilla-counter"></script> -->





    <script>
        const sectionOne = document.querySelector('.counter-1');

        const options = {};

        const observer = new IntersectionObserver(function(entries, observer) {
            entries.forEach(entry => {
                console.log(entry);
                VanillaCounter();
            });
        }, options);

        observer.observe(sectionOne);
    </script>

</body>

</html>