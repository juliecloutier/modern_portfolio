function aleatoire(a, b) {
    if (Array.isArray(a)) {
        return a[Math.floor(Math.random() * a.length)]
    } else {
        return a + Math.random() * (b - a)
    }
}

export default function aleatoire_entier(a, b) {
    return Math.round(a + Math.random() * (b - a))
}

