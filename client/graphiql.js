/**
 * Created by atsu666 on 2017/04/03.
 */
import React from 'react';
import ReactDOM from 'react-dom';
import GraphiQL from 'graphiql';
import fetch from 'isomorphic-fetch';

function graphQLFetcher(graphQLParams) {
    console.log(graphQLParams);
    // return fetch('https://api.github.com/graphql', {
    return fetch('http://localhost:8000/graphql', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json'
            // Authorization: 'token c6fdf11b9b9679492596aaf103c1fee8cf76492d'
        },
        body: JSON.stringify(graphQLParams),
    }).then(response => response.json());
}

ReactDOM.render(<GraphiQL fetcher={graphQLFetcher}/>, document.getElementById('app'));