// añadir url api
const url = 'https://pokeapi.co/api/v2/pokemon?limit=20';

fetch(url)
    .then(response => response.json())
    .then(async data => {
        const pokemones = data.results;
        const contenedor = document.getElementById('personajes');

        for (const p of pokemones) {
            const info = await fetch(p.url).then(res => res.json());
            const card = document.createElement('div');
            card.classList.add('card');
            card.innerHTML = `
            <img src="${info.sprites.front_default}" alt="${info.name}">
            <h3>${info.name}</h3>
            <p>Tipo Principal: ${info.types[0].type.name}</p>
            <p>Altura: ${info.height}</p>
            <p>Peso: ${info.weight}</p>
            <p>Habilidades:</p>
            <ul>
                ${info.abilities.map(ability => `<li>${ability.ability.name}</li>`).join('')}
            </ul>
            
            `;
        contenedor.appendChild(card);
        }




    })

    .catch(error => console.error('Error:', error)); 