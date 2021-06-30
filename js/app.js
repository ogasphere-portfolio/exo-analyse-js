const app = {
  init: () => {
    console.log('init');
    document.getElementById('fullCode').querySelector('button').addEventListener('click', app.handleCodeClick);
    document.getElementById('exo').querySelector('button').addEventListener('click', app.handleExoClick);
    const selectElements = document.getElementById('exo').querySelectorAll('select');
    for (const currentSelectElement of selectElements) {
      currentSelectElement.addEventListener('change', app.handleInstruction);
    }
    // const formElements = document.getElementById('exo').querySelectorAll('form');
    // for (const currentFormElement of formElements) {
    //   currentFormElement.addEventListener('submit', app.handleInstructionFormSubmit);
    // }
  },
  handleCodeClick: evt => {
    console.log('handleCodeClick');
    evt.currentTarget.parentElement.style.display = 'none';
    document.getElementById('exo').style.display = 'block';
    window.scrollTo(0, 0);
  },
  handleExoClick: evt => {
    console.log('handleCodeClick');
    evt.currentTarget.parentElement.style.display = 'none';
    document.getElementById('fullCode').style.display = 'block';
  },
  handleInstruction: evt => {
    console.log('handleInstruction');
    const selectElement = evt.currentTarget;
    const formElement = selectElement.parentElement.parentElement;
    app.checkInstruction(formElement);
  },
  checkInstruction: formElement => {
    console.log('checkInstruction');
    // console.log(formElement);
    // evt.preventDefault();
    // const formElement = evt.currentTarget;
    const formData = new FormData(formElement);
    
    const data = formData.getAll('code[]').map(el => parseInt(el));
    const filteredData = data.filter(el => el > 0);

    if (data.length === filteredData.length) {
      console.log('on peut envoyer !');
      const json = JSON.stringify({
        id: parseInt(formElement.dataset.id),
        name: 'S03E01-analyse-js',
        selection: data
      });
      console.log(json);

      let fetchOptions = {
        method: 'POST',
        mode: 'cors',
        cache: 'no-cache',
        body: json
      };

      const request = fetch('https://hbyrj2hhxg.execute-api.eu-west-3.amazonaws.com/dev/code-analysis', fetchOptions);
      request.then(async rawResponse => {
        console.log(rawResponse);
        const response = await rawResponse.json();
        console.log(response);
        if (response.success === true) {
          formElement.classList.remove('instruction--fail');
          formElement.classList.add('instruction--success');
        } else {
          formElement.classList.remove('instruction--success');
          formElement.classList.add('instruction--fail');
        }
        // Finally, check if game is over
        app.checkGameOver();
      }).catch(reason => {
        console.log(reason);
        alert('ERROR');
        alert(reason);
      });
    } else {
      console.log('tout n\'est pas renseigné => on attend');
      formElement.classList.remove('instruction--fail');
      formElement.classList.remove('instruction--success');
    }
  },
  checkGameOver: () => {
    const instructionElements = document.getElementById('exo').querySelectorAll('.instruction');
    let nbFailed = 0;
    let nbMax = 0;
    for (const currentInstructionElement of instructionElements) {
      if (currentInstructionElement.classList.contains('instruction--fail')) {
        nbFailed++;
        nbMax++;
      } else if (currentInstructionElement.classList.contains('instruction--success')) {
        nbMax++;
      } else if (currentInstructionElement.classList.contains('instruction--disabled')) {
        // nothing to do
      } else {
        nbFailed++;
        nbMax++;
      }
    }

    // Get score element
    const scoreElement = document.getElementById('score');
    // Set score
    scoreElement.textContent = (nbMax - nbFailed) + '/' + nbMax;

    if (nbFailed === 0) {
      alert('Félicitations, tu as réussi !');
      scoreElement.classList.add('success');
    } else {
      scoreElement.classList.remove('success');
    }
  }
};

document.addEventListener('DOMContentLoaded', app.init);
