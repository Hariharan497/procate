// Initialize the agent on page load.
const fpPromise = import('https://fpjscdn.net/v3/clO2TQ9zlIVj3GDNRrd0')
    .then(FingerprintJS => FingerprintJS.load({
        region: "ap"
    }))

// Get the visitorId when you need it.
fpPromise
    .then(fp => fp.get())
    .then(result => {
        const visitorId = result.visitorId
        document.cookie = ["fingerprint = ".visitorId];
    })
