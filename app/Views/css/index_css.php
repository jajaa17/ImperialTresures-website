<style>
  .icon-square {
    width: 3rem;
    height: 3rem;
    border-radius: .75rem;
  }

  .shadow {
    box-shadow: inset 0 -3em 3em rgba(0, 0, 0, 0.1),
      0 0 0 2px rgb(190, 190, 190),
      0.3em 0.3em 1em rgba(0, 0, 0, 0.3);
  }

  .img-pin {
    background-color: #fff;
    width: 680px;
  }

  .container-btn {
    margin-top: 20px;
    justify-content: center;
  }

  button {
    background-color: #fff;
    padding: 5px 15px;
    transition: 0.3s;
  }

  button:hover {
    background-color: rgb(0, 0, 0);
    color: aliceblue;
  }

  button:active {
    background-color: rgb(56, 52, 52);
  }

  .t-title {
    text-align: center;
  }

  .testimonial {
    margin-top: 50px;
    display: flex;
    column-gap: 20px;
    height: max-content;
  }

  .text-box {
    width: 100%;
    text-align: justify;
    line-height: 30px;
    padding: 20px;
  }
  .card {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 300px;
      padding: 10px;
      overflow: hidden;
      padding: 0;
    }

    .card img {
      max-width: 100%;
      max-height: 100%;
      object-fit: contain;
    }


  @media (max-width: 600px) {
    .header {
      text-align: center;
    }

    .img-pin {
      display: none;
      width: 1px;
    }

    .container {
      background-color: white;
    }

    .album h2 {
      font-size: large;
    }

    .testimonial {
      display: grid;
      grid-template-columns: 1fr;
    }

    .row1 {
      justify-content: center;
    }

    .coming-soon {
      text-align: center;
    }
  }

  @media (max-width: 1023px) {
    .img-pin {
      display: none;
      width: 1px;
    }

    .testimonial {
      display: grid;
      grid-template-columns: 1fr;
    }

    .row1 {
      justify-content: center;
    }

    .coming-soon {
      text-align: center;
    }
  }
</style>