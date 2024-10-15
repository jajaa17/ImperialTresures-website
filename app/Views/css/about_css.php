<style>
    .about-us {
    position: relative;
    background-image: url(talking.jpg);
    background-position: center;
    width: 100%;
    height: 250px;
    display: flex;
    flex-direction: column-reverse;
    opacity: 100%;
    background-color: black;
}


.about-us p {
    color: aliceblue;
    margin-bottom: -38px;
    font-size: 7rem;

}

.aboutUsSection {
    display: flex;
    margin: 0px;
    padding: 50px 200px;
    column-gap: 100px;
    align-items: center;
    
}

.aboutUsSection img {
    width: 500px;
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
    color: black;
    background-color: rgb(236, 236, 237);
}

.icon {
    margin-bottom: 10px;
    width: 40px;
}

.container .row {
    justify-content: center;
    align-items: center;
}

.journeyImg {
    width: 460px;
}

@media (min-width: 0px) and (max-width: 599px) {
    .aboutUsSection {
        display: grid;
        margin: 0;
        margin-top: 30px;
        padding: 10;
        grid-template-columns: 1fr;
        column-gap: 100px; 
        font-size: 15px;
        width: 100%;
        justify-content: center;
        
    }

    .coming-soon {
        text-align: center;
    }
    
    .about-us {
        background-color: rgb(0, 0, 0);
        width: 100%;
        height: 150px;
        display: flex;
        flex-direction: column-reverse;
    }
    .about-us p {
        color: aliceblue;
        margin-bottom: -5.5%;
        font-size: 4rem;
    
    }
    .aboutUsSection img {
        width: 380px;
        margin-bottom: 20px;
    }
    .testimonial {
        margin-top: -20px;
        display: grid;
        grid-template-columns: 1fr;
        row-gap: 2px;
        height: max-content;
        align-items: center;
        
    }
    .text-box {
        width: 100%;
        height: 90%;
        
    }
}

@media (min-width: 600px) and (max-width: 1023px) {
    .aboutUsSection {
        display: grid;
        grid-template-columns: 1fr;
        column-gap: 100px;
        text-align: justify;
        font-size: medium;
        width: 100%;
        justify-content: center;
        
    }
    .about-us {
        background-color: rgb(0, 0, 0);
        width: 100%;
        height: 200px;
        display: flex;
        flex-direction: column-reverse;
    }
    .about-us p {
        color: aliceblue;
        margin-bottom: -4.5%;
        font-size: 5.5rem;
    
    }
    .aboutUsSection img {
        width: 550px;
        margin-bottom: 20px;
    }
    .testimonial {
        margin-top: -20px;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        row-gap: 2px;
        height: max-content;
        align-items: center;
        
    }
    .text-box {
        width: 100%;
        height: 90%;
        
    }
    .journeyImg {
        width: 670px;
    }
}
</style>