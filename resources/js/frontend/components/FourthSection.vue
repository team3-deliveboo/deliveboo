<template>
    <div class="container">

        <div class="fourth-section">
            <div class="row gy-3">
                
                <div class="col-12 col-lg-6">
                    <div class="left-col">
                        <div class="content-card">
                            <h2 class="fw-bold">Diventa nostro partner</h2>
                            <h5>Raggiungi più clienti con Deliveboo. Gestiamo noi la consegna, così tu puoi dedicarti a offrire i migliori piatti e prodotti.</h5>
                            <button class="white-btn">Inizia ora <i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6">
                    <div class="right-col">
                        <div class="content-card">
                            <h2 class="fw-bold">Consegna con noi</h2>
                            <h5>La libertà di consegnare dove e quando vuoi, con ottimi guadagni, convenzioni e sconti riservati a te.</h5>
                            <button class="white-btn">Inizia ora <i class="fa-solid fa-arrow-right-long"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'FourthSection'
}
</script>

<style lang="scss" scoped>
@import '~/resources/sass/backend/_variables.scss';
@import 'resources/sass/frontend/buttons.scss';

.fourth-section {
    padding: 4rem 0;

    .left-col {
        background-image: url('/img/restaurant.png');
    }

    .right-col {
        background-image: url('/img/rider.png');
    }

    .left-col, .right-col {
        background-size: cover;
        height: 500px;
        border-radius: 10px;
        box-shadow: 0 0 20px 0px lightgray;
        display: flex;
        flex-direction: column;
        justify-content: flex-end;
        opacity: .9;

        .content-card {
            color: white;
            width: 80%;
            padding: 1.5rem;
            font-family: 'IBM Plex Sans Arabic', sans-serif;
        }

        @media screen and (max-width: 375px) { 
            .content-card {
                width: 100%;
            }
        }

        .white-btn {
            padding: 10px 21px;
            margin-top: 1rem;
            font-size: 1rem;

            i {
                color: $deliveroo-blue;
                vertical-align: middle;
            }
        }
    }

    @media screen and (max-width: 375px) { 
        .left-col, .right-col {
            background-position: center;
            background-size: cover;
        }
    }
}
</style>
