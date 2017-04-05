/**
 * Created by atsu666 on 2017/04/03.
 */
import React from 'react';
import ReactDOM from 'react-dom';
import GraphiQL from 'graphiql';
import fetch from 'isomorphic-fetch';

function graphQLFetcher(graphQLParams) {
    console.log(graphQLParams);
    return fetch('https://api.github.com/graphql', {
        method: 'post',
        headers: {
            'Content-Type': 'application/json',
            Authorization: 'token 20f370bb2ebd6afb7be18cb748372d9be94ede63'
        },
        body: JSON.stringify(graphQLParams),
    }).then(response => response.json());
}

ReactDOM.render(<GraphiQL fetcher={graphQLFetcher}/>, document.getElementById('app'));