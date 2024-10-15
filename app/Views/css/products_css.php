<style>
  .choosecharacter {
    display: flex;
    justify-content: center;
    gap: 16px;
    width: 800px;
    height: 400px;
}



.testimonial {
    margin-top: 50px;
    display: flex;
    column-gap: 20px;
    height: max-content;
    align-items: center;

}

.text-box {
    width: 100%;
    text-align: center;
    line-height: 30px;
    padding: 20px;
    color: rgb(0, 0, 0);
    background-color: #fff;
}

.icon {
    margin-bottom: 10px;
    width: 50px;
    height: 50px;
}


/* CARD */
.card {
    display: flex;
    justify-content: center;
}

.container {
    width: 1200px;
    margin: 0 auto;
}

div.boxes.solo>div {
    justify-content: center;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    row-gap: 20px;
}

.boxes img {
    padding: 10px;
}

.boxes .container {
    padding: 30px;
    display: flex;

}

.boxes img {
    width: 400px;
    object-fit: cover;
}

.boxes .card {
    height: 420px;
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-right: 20px;
    padding: 20px;
    border-radius: 10px;
    border: 5px solid rgb(15, 14, 14);
}

.card img {
    width: 80%;
}

.card img:hover {
    animation: bounce 1.5s infinite;
}

#submit:hover {
    animation: shake 0.5s;
}


@keyframes bounce {

    0%,
    100% {
        transform: translateY(0px);
    }

    40% {
        transform: translateY(-10px);
    }
}

@keyframes shake {
    0% {
        transform: translateX(0);
    }

    20% {
        transform: translateX(5px) rotate(5deg);
    }

    40% {
        transform: translateX(5px) rotate(5deg);
    }

    50% {
        transform: translateX(-5px) rotate(-5deg);
    }

    60% {
        transform: translateX(5px) rotate(5deg);
    }

    70% {
        transform: translateX(-5px) rotate(-5deg);
    }

    90% {
        transform: translateX(-5px) rotate(-5deg);
    }

    100% {
        transform: translateX(0) rotate(0);
    }
}

#submit:active {
    background-color: rgb(218, 37, 37);
}

#submit {
    background-color: red;
    padding: 10px;
    border-radius: 10px;
    width: 50%;
}

.bottomPart {
    display: flex;
    justify-content: space-between;
    gap: 90px;
}


.buy-button {
    justify-content: center;
    width: 100%;
    height: 100%;
    border-radius: 5px;
    background-color: white;
    color: black;
    font-size: 18px;
    text-align: center;
    line-height: 20px;
    text-decoration: none;
    display: inline-block;
    margin-right: 50%;
    font-weight: 500;
}

.explore-button {
    justify-content: center;
    width: 100%; 
    height: 100%; 
    border-radius: 5px; 
    background-color: white;
    color: black;
    font-size: 18px;
    text-align: center;
    line-height: 20px;
    text-decoration: none;
    display: inline-block;
    margin-right: 50%;
    font-weight: 500;
    margin-left: 85%;
}

.card-img:hover {
    transform: translateY(-25%);
    box-shadow: rgba(226, 196, 63, 0.25) 0px 13px 47px -5px, rgba(180, 71, 71, 0.3) 0px 8px 16px -8px;
}

.container-btn {
    margin-top: 10px;
    margin-right: 90px;
    justify-content: center;
}

.viewProducts button {
    justify-content: center;
    background-color: #fff;
    padding: 5px 15px;
    margin-bottom: 10px;
    transition: 0.3s;
}

.viewProducts button:hover {
    background-color: rgb(0, 0, 0);
    color: aliceblue;
}

.viewProducts button:active {
    background-color: rgb(56, 52, 52);
}

/* Coming Soon */
.content{
    text-align: center;
}

.content h2{
    margin-top: 20px;
    margin-bottom: 20px;
   
}

.content button{
    border: 2px solid #fff;
    font-size: larger;
}


.launching-time{
    display: flex;
    justify-content: center;
}

.launching-time div{
    flex-basis: 550px;
}

.launching-time div p{
    font-size: 100px;
    margin-bottom: -15px;
}

@media (max-width: 599px) {
    div.boxes.solo>div {
        justify-content: center;
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 20px;
    }

    .boxes .container{
        justify-content: center;
        
    }

    .boxes .card {
        height: 390px;
        margin-right: 0px;
        padding: 20px;
        border-radius: 10px;
        border: 5px solid rgb(15, 14, 14);
        
    }

    .icon {
        margin-bottom: 10px;
        width: 40px;
        height: 40px;
    }

    .text-box {
        width: 90px;
    }

    .text-box h5{
        font-size: small;
    }

    .testimonial {
        display: flex;
        justify-content: center;
        column-gap: 20px;
        height: max-content;
        align-items: center;
    }

    .viewProducts {
        font-size: x-small;
    }

    .launching-time div p{
        font-size: 50px;
        margin-bottom: -15px;
    }
}

@media (min-width: 600px) and (max-width: 1023px) {
    .card-container {
        display: grid;
        grid-template-columns: 1fr;
    }

    .card img {
        width: 200px;
    }
}
</style>