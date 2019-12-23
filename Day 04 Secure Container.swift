func isValid(candidate: Int) -> Bool {
    let charArray = Array(String(candidate))

    var hasDoubleDigit = false
    var lastDigit = charArray[0]
    for i in 1...5 {
        if lastDigit > charArray[i] {
            return false
        }

        if lastDigit == charArray[i] {
            hasDoubleDigit = true
        }

        lastDigit = charArray[i]
    }

    return hasDoubleDigit
}

func isValidPart2(candidate: Int) -> Bool {
    let charArray = Array(String(candidate))

    var hasDoubleDigit = false
    for i in 0 ... 9 {
        let char = String(i)
        if charArray.filter({ String($0) == char }).count == 2 {
            hasDoubleDigit = true
        }
    }

    var lastDigit = charArray[0]
    for i in 1...5 {
        if lastDigit > charArray[i] {
            return false
        }

        lastDigit = charArray[i]
    }

    return hasDoubleDigit
}

var numSuccesses = 0
for i in 123257 ... 647015 {
    if isValid(candidate: i) {
        numSuccesses += 1
    }
}

print(numSuccesses)

numSuccesses = 0
for i in 123257 ... 647015 {
    if isValidPart2(candidate: i) {
        numSuccesses += 1
    }
}

print(numSuccesses)
