const url=window.location.href
const foo=new URL(url)
console.log(foo)

const email_from_php=foo.search

let del_index=email_from_php.indexOf('=')


localStorage.setItem("useremail",email_from_php.slice(del_index+1,email_from_php.length))