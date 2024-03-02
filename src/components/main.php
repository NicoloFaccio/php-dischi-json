<main>
    <div class="container">
        <div class="row">
            <div v-for="(element, index) in dischi" :key="index" class="col-4 mb-4">
                <div class="card">
                    <figure>
                        <img class="card-img-top" :src="element.poster" alt="Disco">
                    </figure>

                    <div class="card-body text-center">
                        <h4 class="card-title">{{element.title}}</h4>
                        <p class="card-text">{{element.author}}</p>
                        <p class="card-text"><b>{{element.year}}</b></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
