const button = document.querySelector("#load-data")
const container = document.querySelector("#data")

// @ts-ignore
button.addEventListener('click', async () => {
    const jsonData = await fetch("/api/test")
    const data = await jsonData.json()
    container.innerHTML = JSON.stringify(data)
})
