 
// Validate using Regex for UserInput remove unwanted characters
export const sanitizeUsername = (data) => {
    return data.replace(/[^a-zA-Z0-9_]/g, '');
};

// escape HTML characters
const escapeHTML = (data) => {
    const entityMap = {
        '&': '&amp;',
        '<': '&lt;',
        '>': '&gt;',
        '"': '&quot;',
        "'": '&#039;'
    };

    return data.replace(/[&<>"']/g, (char) => entityMap[char]);
};

// Escape Sql Sensitive Characters
const escapeSQL = (data) => {
    return data.replace(/[\0\x08\x09\x1a\n\r"'\\\%]/g, (char) => {
        switch (char) {
            case "\0": return "\\0";
            case "\x08": return "\\b";
            case "\x09": return "\\t";
            case "\x1a": return "\\z";
            case "\n": return "\\n";
            case "\r": return "\\r";
            case "\"": case "'": case "\\": case "%":
                return "\\" + char; // Prepends a backslash to any of these characters
            default: return char;
        }
    });
};

// encodeURIComponent() converts characters into their percent-encoded form, making them safe to include in URLs.
const sanitizeForURL = (input) => {
    return encodeURIComponent(input);
};
