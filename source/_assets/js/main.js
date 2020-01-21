const viewSourceLinks = document.querySelectorAll('.view-source');

function viewSource(e){
    e.preventDefault();

    const blockNumber = this.dataset.block

    if(this.innerText == "View Source"){
        this.innerText = 'Hide Source'

        const block = document.querySelector(`div.code-block-${blockNumber}`)
        const blockHtml = block.innerHTML    

        document.querySelector( `code.block-${blockNumber}` ).classList.remove('hidden')
        document.querySelector( `code.block-${blockNumber}` ).classList.add('block')

        // removing that odd first line.
        let lines = blockHtml.split('\n');
        lines.splice(0,1);
        let blockHtmlFinal = lines.join('\n');
    
        document.querySelector( `code.block-${blockNumber}` ).innerText = blockHtmlFinal

    } else {
        this.innerText = 'View Source'

        document.querySelector( `code.block-${blockNumber}` ).classList.remove('block')
        document.querySelector( `code.block-${blockNumber}` ).classList.add('hidden')

        document.querySelector( `code.block-${blockNumber}` ).innerText = ''

    }

}

viewSourceLinks.forEach(block => block.addEventListener('click', viewSource))