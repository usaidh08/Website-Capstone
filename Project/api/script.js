// script.js
function searchRecipe() {
    const query = $('#recipeInput').val();

    if (query.trim() !== '') {
        getRecipes(query);
    } else {
        console.log('Masukkan resep terlebih dahulu');
    }
}

function getRecipes(query) {
    const apiUrl = 'proxy.php?query=' + query;

    $.ajax({
        method: 'GET',
        url: apiUrl,
        contentType: 'application/json',
        success: function (result) {
            console.log('Raw Result:', result); // Add this line for debugging
            displayRecipes(result);
        },
        error: function ajaxError(jqXHR) {
            console.error('Error: ', jqXHR.responseText);
        }
    });
}

function displayRecipes(response) {
    const recipesContainer = $('#recipes-container');
    recipesContainer.empty();

    try {
        console.log('Parsed Result:', response); // Add this line for debugging

        if (response && response.items && Array.isArray(response.items)) {
            response.items.forEach(recipe => {
                const recipeCard = createRecipeCard(recipe);
                recipesContainer.append(recipeCard);
            });
        } else {
            console.error('Invalid or empty response format:', response);
        }
    } catch (error) {
        console.error('Error parsing JSON response:', error);
    }
}

function createRecipeCard(recipe) {
    const card = $('<div class="recipe-card"></div>');

    const title = $(`<h3>${recipe.name}</h3>`);
    const ingredients = $(`<p><strong>Ingredients:</strong> ${recipe.ingredients.join(', ')}</p>`);
    const calories = $(`<p><strong>Calories:</strong> ${recipe.calories}</p>`);

    card.append(title);
    card.append(ingredients);
    card.append(calories);

    return card;
}
